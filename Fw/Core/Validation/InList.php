<?php


namespace Core\Validation;


class InList extends Validator
{

    public function validate($value): bool
    {
        return in_array($value, $this->rule);
    }
}