<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasAdvancedFilter;
use App\Enums\MenuPlacement;

/**
 * @mixin IdeHelperMenu
 */
class Menu extends Model
{
    use HasAdvancedFilter;

    final public const ATTRIBUTES = [
        'id', 'name', 'type',
    ];

    public $orderable = self::ATTRIBUTES;

    public $filterable = self::ATTRIBUTES;

    protected $fillable = [
        'name',
        'label',
        'url',
        'type',
        'placement',
        'sort_order',
        'parent_id',
        'new_window',
    ];

    protected $casts = [
        'placement' => MenuPlacement::class,
    ];

    public function scopeActive($query): void
    {
        $query->where('status', true);
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
