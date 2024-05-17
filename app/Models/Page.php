<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\PageType;
use App\Traits\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperPage
 */
class Page extends Model
{
    use HasAdvancedFilter;
    use HasFactory;

    final public const ATTRIBUTES = [
        'id', 'title', 'slug',
        'type',
    ];

    public $orderable = self::ATTRIBUTES;

    public $filterable = self::ATTRIBUTES;

    protected $fillable = [
        'title', 'slug', 'description',
        'meta_title', 'meta_description',
        'status', 'images', 'type',
        'settings',
    ];

    protected $casts = [
        'satuts'   => Status::class,
        'type'     => PageType::class,
        'settings' => 'array',
    ];

    public function scopeActive($query): void
    {
        $query->where('status', true);
    }
}
