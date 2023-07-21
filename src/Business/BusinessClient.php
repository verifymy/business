<?php

namespace VerifyMy\SDK\Business;

interface BusinessClient extends ExportableClient
{
    const API_VERSION_V1 = 'v1';
    const API_VERSIONS = [
        self::API_VERSION_V1 => BusinessClientV1::class,
    ];

    const URI = 'business';

    /**
     * @param AddAllowedRedirectUrlsRequest $request
     * @return AddAllowedRedirectUrlsResponse
     * @throws InvalidStatusCodeException
     * @throws ValidationException
     */
    public function addAllowedRedirectUrls(AddAllowedRedirectUrlsRequest $request): AddAllowedRedirectUrlsResponse;
}