<?php

namespace VerifyMy\SDK\Business\Entity\Requests;

use VerifyMy\SDK\Core\DTO;
use VerifyMy\SDK\Core\Validator\RequiredValidator;
use VerifyMy\SDK\Core\Validator\UrlValidator;


final class AllowedRedirectUrlsRequest extends DTO
{
    protected $fillable = ["urls"];

    protected $validate = [
        'urls' => [
            RequiredValidator::class,
            ArrayValidator::class,
        ]
    ];
}