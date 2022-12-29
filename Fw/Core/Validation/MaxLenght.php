<?php
namespace Core\Validation;

class MaxLenght extends Validator
{

    public function validate($value): bool
    {
        if (is_array($value)) {
            return count($value) <= $this->rule;
        }

        if (is_string($value)) {
            return mb_strlen($value) <= $this->rule;
        }

    }
}