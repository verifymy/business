<?php

namespace VerifyMy\SDK;

use VerifyMy\SDK\Business\Entity\Requests\AllowedRedirectUrlsRequest;
use VerifyMy\SDK\Core\Validator\ValidationException;
use VerifyMy\Commons\Transport\InvalidStatusCodeException;


final class BusinessClientV1 implements BusinessClient
{
    const ENDPOINT_ADD_ALLOWED_REDIRECT_URLS = '/allowed-redirects';

    /**
     * @var HTTP $transport
     */
    private $transport;

    
    /**
     * @var string $baseURL
     * @var string $nucleusApiKey
     */
    private $nucleusApiKey;

    public function __construct(string $baseURL, string $nucleusApiKey)
    {
        $uri = BusinessClient::URI;
        $this->transport = new HTTP("$baseURL/$uri");
        $this->nucleusApiKey = $nucleusApiKey;
    }

    /**
     * @param AllowedRedirectUrlsRequest $request
     * @return void
     * @throws InvalidStatusCodeException
     * @throws ValidationException
     */
    public function addAllowedRedirectUrls(AllowedRedirectUrlsRequest $request): void
    {
        $this->transport->put(
            self::ENDPOINT_ADD_ALLOWED_REDIRECT_URLS,
            $request->toArray(),
            [
                'Authorization' => $this->nucleusApiKey,
            ],
            [204]
        );
    }

    /**
     * @param AllowedRedirectUrlsRequest $request
     * @return void
     * @throws InvalidStatusCodeException
     * @throws ValidationException
     */
    public function removeAllowedRedirectUrls(AllowedRedirectUrlsRequest $request): void
    {
        $this->transport->delete(
            self::ENDPOINT_ADD_ALLOWED_REDIRECT_URLS,
            $request->toArray(),
            [
                'Authorization' => $this->nucleusApiKey,
            ],
            [204]
        );
    }
}