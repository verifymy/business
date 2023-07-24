<?php

namespace VerifyMy\SDK;
use VerifyMy\SDK\Business\BusinessClient;

interface VerifyMyInterface 
{
    /**
     * @return BusinessClient
     */

    public function business(): BusinessClient;
}