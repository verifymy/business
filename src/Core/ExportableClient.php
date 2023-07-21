<?php

namespace VerifyMy\SDK\Core;

interface ExportableClient
{
    public function useSandbox(): void;

    public function setBaseURL(string $baseURL): void;
}