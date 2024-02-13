<?php

namespace Core;

class ValidationException extends \Exception
{
    public readonly array $errors;
    public readonly array $staleData;

    public static function throw(array $errors, array $staleData)
    {
        $instance = new static;

        $instance->errors = $errors;
        $instance->staleData = $staleData;

        throw $instance;
    }
}