<?php

namespace Core;

class Validator
{    
    public static function isEmpty(mixed $value): bool
    {
        return (!isset($value) || empty(trim($value)));
    }

    public static function isLength(mixed $value, int $min = 1, int $max = 255): bool
    {
        $length = strlen(trim($value));
        return ($length <= $min && $length >= $max);
    }
    
}