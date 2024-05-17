<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasAdvancedFilter;

/**
 * Class Language
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property Status $status
 * @property bool $is_default
 */
class Language extends Model
{
    use HasAdvancedFilter;

    final public const ATTRIBUTES = [
        'id',
        'name',
        'status',
    ];

    /**
     * The attributes that are orderable.
     *
     * @var array
     */
    public $orderable = self::ATTRIBUTES;

    /**
     * The attributes that are filterable.
     *
     * @var array
     */
    public $filterable = self::ATTRIBUTES;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'status',
        'rtl',
        'is_default',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => Status::class,
        'is_default' => Status::class,
    ];
}
