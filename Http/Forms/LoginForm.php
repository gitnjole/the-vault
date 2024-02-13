<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    private $errors = [];

    public function __construct(public array $credentials)
    {
        foreach ($credentials as $fieldName => $fieldValue) {       
            if (Validator::isEmpty($fieldValue)) {
                $this->addError(
                    $fieldName,
                    "Field can not be empty."
                );
            }
            
            if (Validator::isLength($fieldValue, $min = 1, $max = 25)) {
                $this->addError(
                    $fieldName,
                    "Length of '{$fieldName}' can not be more than {$max}."
                );
            }
        }
    }

    public static function validate(array $credentials)
    {
        $instance = new static($credentials);

        return $instance->failed() ? $instance->throwException() : $instance;
    }

    public function throwException()
    {
        ValidationException::throw($this->getErrors(), $this->credentials);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function addError($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}