<?php

declare(strict_types=1);

namespace App\Enums;

enum PageType: string
{
    case HOME = 'home';
    case ABOUT = 'about';
    case ARTICLE = 'article';
    case CONTACT = 'contact';

    public function label(): string
    {
        return match ($this) {
            static::HOME         => __('home'),
            static::ABOUT        => __('about'),
            static::CONTACT      => __('contact'),
            static::ARTICLE      => __('article'),
        };
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function options(): array
    {
        return self::cases();
    }

    public static function getLabel($value): ?string
    {
        foreach (self::cases() as $case) {
            if ($case->getValue() === $value) {
                return $case->label();
            }
        }

        return null;
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
