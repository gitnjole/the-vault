<?php

namespace Core;

class Validator
{    
    public static function isEmpty(mixed $value): bool
    {
        return (!isset($value) || empty(trim($value))) ? true : false;

    }
    
    public static function isLength(mixed $value,int $min = 1, int $max = 250): bool
    {
        return ((strlen(trim($value)) >= $max) || (strlen(trim($value)) <= $min)) ? true : false;
    }
}