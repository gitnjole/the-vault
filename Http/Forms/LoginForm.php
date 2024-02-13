<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    private $errors = [];

    public function validate(array $credentials)
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

        return empty($this->errors);
    }

    public function addError($field, $message)
    {
        $this->errors[$field] = $message;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}