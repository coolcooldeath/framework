<?php


namespace Core\Validation;


class Chain extends Validator
{

    public function validate($value): bool
    {
        $result = false;

        foreach ($this->rule as $validator) {
            if (!($validator instanceof Validator)) {
                continue;
            }
            if (!$result = $validator->validate($value)) {
                break;
            }

        }
        return $result;
    }
}