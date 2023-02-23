<?php


namespace Core\Validation;


class Number extends Validator
{
    protected $rule = null;
    public function __construct()
    {
        parent::__construct($this->rule);
    }

    public function validate($value): bool
    {
        return is_numeric($value);
    }
}