<?php

use VerifyMy\SDK\VerifyMy;
use VerifyMy\SDK\Business\Entity\Requests\AllowedRedirectUrlsRequest;

require_once __DIR__ . "/../../vendor/autoload.php";


$baseURL = "https://oauth-dev.verifymycontent.com";
$nucleusApiKey = "222222";

# Setup SDK
$vmc = new VerifyMy($baseURL, $nucleusApiKey);


//add new allowed url request
$request = new AllowedRedirectUrlsRequest([
    "urls" => ["https://google.com", "https://amazon.com"]
]);

try {
    $vmc->business()->addAllowedRedirectUrls($request);
    echo "urls updated with success";
}catch(Exception $e){
    var_export($e);
}
