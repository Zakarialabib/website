<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;
use App\Traits\HasTags;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\HasAdvancedFilter;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasTags;
    use InteractsWithMedia;
    use HasAdvancedFilter;

    final public const ATTRIBUTES = [
        'id',
        'title',
        'status',
        'created_at',
        'updated_at',
    ];

    public $orderable = self::ATTRIBUTES;

    public $filterable = self::ATTRIBUTES;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'canonical_url',
        'cover_image',
        'show_toc',
        'is_pinned',
    ];

    protected $casts = [
        'show_toc'     => 'boolean',
        'is_pinned'    => 'boolean',
    ];

    protected $with = [
        'media',
    ];


    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function excerpt(int $limit = 110): string
    {
        return Str::limit(strip_tags((string) md_to_html($this->body)), $limit);
    }

    public function originalUrl(): ?string
    {
        return $this->canonical_url;
    }

    public function canonicalUrl(): ?string
    {
        return $this->originalUrl() ?: route('articles.show', $this->slug);
    }

    public function nextArticle(): ?Article
    {
        return self::where('created_at', '>', $this->created_at)
            ->where('id', '>', $this->id)->orderBy('id')->first();
    }

    public function previousArticle(): ?Article
    {
        return self::where('created_at', '>', $this->created_at)
            ->where('id', '<', $this->id)->orderByDesc('id')->first();
    }

    public function readTime(): int
    {
        return Str::readDuration($this->body);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('media')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpg', 'image/jpeg', 'image/png']);
    }

    public function showToc(): bool
    {
        return $this->show_toc;
    }

    public function createdAt(): ?Carbon
    {
        return $this->created_at;
    }
    public function isPinned(): bool
    {
        return $this->is_pinned;
    }
    /**
     * Scope a query to return only pinned posts.
     *
     * @param  Builder<Article>  $query
     * @return Builder<Article>
     */
    public function scopePinned(Builder $query): Builder
    {
        return $query->where('is_pinned', true);
    }

    public function scopeRecent($query)
    {
        return $query->orderByDesc('created_at');
    }


    public function delete(): ?bool
    {
        $this->removeTags();

        return parent::delete();
    }
}
