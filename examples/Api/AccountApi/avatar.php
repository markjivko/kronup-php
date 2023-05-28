<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.io/Api/AccountApi/#avatar
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// 🐛 Enable debugging
$sdk->config()->setDebug(true);

// Avatar - must be a PNG file, exactly 256x256 pixels, smaller than 200KB
$arg_avatar = "/path/to/file.txt";

try {
    /**
     * POST /account/avatar
     * 
     * @var \Kronup\Model\Account $response
     */
    $response = $sdk
        ->api()
        ->account()
        ->avatar($arg_avatar);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->avatar(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->avatar(): %s\n", 
        $exc->getMessage()
    );
}