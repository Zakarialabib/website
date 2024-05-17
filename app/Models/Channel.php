<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\CannotAddChannelToChild;
use App\Traits\HasSlug;

class Channel extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'color',
    ];

    protected $withCount = [
        'threads',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::saving(static function ($channel): void {
            if ( ! $channel->parent_id) {
                return;
            }

            if ( ! ($record = self::find($channel->parent_id))) {
                return;
            }

            if ( ! $record->exists()) {
                return;
            }

            if ( ! $record->parent_id) {
                return;
            }

            // @phpstan-ignore-line
            throw CannotAddChannelToChild::childChannelCannotBeParent($channel);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    public function hasItems(): bool
    {
        return $this->items->isNotEmpty();
    }
}
