<?php

namespace VerifyMy\SDK\Core\Validator;


final class UrlValidator extends Validator
{
    /**
     * @throws ValidationException
     */
    public static function validate($input, string $field)
    {
        if (!empty($input) && !filter_var($input, FILTER_VALIDATE_URL)) {
            self::throwValidationException("{$field} must be a valid URL");
        }
    }
}
