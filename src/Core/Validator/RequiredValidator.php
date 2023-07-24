<?php

namespace VerifyMy\SDK\Core\Validator;

final class RequiredValidator extends Validator
{
    /**
     * @throws ValidationException
     */
    public static function validate($value, string $field)
    {
        if ($value === null || $value === '') {
            self::throwValidationException("{$field} is required");
        }
    }
}
