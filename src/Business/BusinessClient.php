<?php

namespace VerifyMy\SDK\Business;

use VerifyMy\SDK\Business\Requests\AllowedRedirectUrlsRequest;
use VerifyMy\SDK\Core\ExportableClient;
use VerifyMy\Commons\Transport\InvalidStatusCodeException;
use VerifyMy\SDK\Core\Validator\ValidationException;

interface BusinessClient extends ExportableClient
{
    const API_VERSION_V1 = 'v1';
    const API_VERSIONS = [
        self::API_VERSION_V1 => BusinessClientV1::class,
    ];

    const URI = 'business';

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