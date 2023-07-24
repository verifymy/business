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
    "urls" => ["https://amazon.com"]
]);

try {
    $vmc->business()->removeAllowedRedirectUrls($request);
    echo "urls removed with success";
}catch(Exception $e){
    var_export($e);
}
