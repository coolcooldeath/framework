<?php


namespace Core\Validation;


class RegExp extends Validator
{

    public function validate($value): bool
    {
         if(preg_match($this->rule, $value))
             return true;
         else
             return false;
    }
}