<?php

declare(strict_types=1);

namespace App\Enums;

enum MenuPlacement: string
{
    case HEADER = 'header';
    case FOOTER_SECTION_1 = 'footer_section_1';
    case FOOTER_SECTION_2 = 'footer_section_2';
    case FOOTER = 'footer';
    case SIDEBAR = 'sidebar';
    case TOPBAR = 'topbar';
    case MOBILE_HEADER = 'mobile_header';

    public function label(): string
    {
        return match ($this) {
            static::HEADER           => __('Header'),
            static::FOOTER_SECTION_1 => __('Footer section 1'),
            static::FOOTER_SECTION_2 => __('Footer section 2'),
            static::FOOTER           => __('Footer'),
            static::SIDEBAR          => __('Sidebar'),
            static::TOPBAR           => __('Topbar'),
            static::MOBILE_HEADER    => __('Mobile header'),
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
