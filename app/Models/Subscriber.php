<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;

/**
 * @mixin IdeHelperSubscriber
 */
class Subscriber extends Model
{
    use HasAdvancedFilter;

    final public const ATTRIBUTES = [
        'id',
        'name',
        'email',
        'status',
    ];

    public $orderable = self::ATTRIBUTES;

    public $filterable = self::ATTRIBUTES;

    protected $fillable = [
        'name',
        'tag',
        'status',
        'email',
    ];

    protected $casts = [
        'status' => Status::class,
    ];
}
