<?php

declare(strict_types=1);

namespace App\Enums;

use Illuminate\Support\Str;

enum Status: int
{
    case ACTIVE = 1;

    case INACTIVE = 0;

    case DEFAULT = 1;

    case NOT_DEFAULT = 0;

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }

    public function getName(): string
    {
        return __(Str::studly($this->name));
    }

    public function getValue()
    {
        return $this->value;
    }

    public static function getLabel($value): ?string
    {
        foreach (self::cases() as $case) {
            if ($case->getValue() === $value) {
                return $case->getName();
            }
        }

        return null;
    }
}
