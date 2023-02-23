<?php


namespace Core\Validation;


class Email extends RegExp
{
    public function __construct($rule = null)
    {
        parent::__construct($rule);
//        $this->rule = '/^\+?([0-9]{1,3})-?([0-9]{2})-?([0-9]{7})$/';
        $this->rule = '/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i';
    }
}