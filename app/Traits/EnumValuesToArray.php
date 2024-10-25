<?php

namespace App\Traits;

trait EnumValuesToArray
{
    public static function values(): array
    {
        return array_map(fn ($enum) => $enum->value, static::cases());
    }
}
