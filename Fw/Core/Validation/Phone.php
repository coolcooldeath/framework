<?php


namespace Core\Validation;


class Phone extends RegExp
{

    public function __construct($rule = null)
    {
        parent::__construct($rule);
        $this->rule = '/^\+?([0-9]{1,3})-?([0-9]{2})-?([0-9]{7})$/';
    }
}