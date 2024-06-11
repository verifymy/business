<?php

namespace VerifyMy\SDK\Business;

use VerifyMy\SDK\Business\Entity\Requests\AllowedRedirectUrlsRequest;
use VerifyMy\SDK\Commons\Transport\InvalidStatusCodeException;
use VerifyMy\SDK\Core\Validator\ValidationException;

interface BusinessClient
{
    const API_VERSION_V1 = 'v1';
    const API_VERSIONS = [
        self::API_VERSION_V1 => BusinessClientV1::class,
    ];

    const URI = 'v1/business';

    /**
     * @param AllowedRedirectUrlsRequest $request
     * @return void
     * @throws InvalidStatusCodeException
     * @throws ValidationException
     */
    public function addAllowedRedirectUrls(AllowedRedirectUrlsRequest $request): void;

    /**
     * @param AllowedRedirectUrlsRequest $request
     * @return void
     * @throws InvalidStatusCodeException
     * @throws ValidationException
     */
    public function removeAllowedRedirectUrls(AllowedRedirectUrlsRequest $request): void;
}