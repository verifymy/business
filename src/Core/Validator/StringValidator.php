<?php

namespace VerifyMy\SDK\Core\Validator;


final class StringValidator extends Validator
{
    /**
     * @throws ValidationException
     */
    public static function validate($input, string $field)
    {
        if (!empty($input) && !is_string($input)) {
            self::throwValidationException("{$field} must be a string");
        }
    }
}
