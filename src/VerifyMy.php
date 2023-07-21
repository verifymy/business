<?php

namespace VerifyMy\SDK;

use VerifyMy\Commons\Security\HMAC;
use VerifyMy\SDK\Business\BusinessClient;

final class VerifyMy implements VerifyMyInterface
{
    /**
     * @var BusinessClient $businessClient
     */
    private $businessClient;

    /**
     * @var HMAC $hmac
     */
    private $hmac;
}