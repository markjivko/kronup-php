<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/OrganizationsApi/#logo
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

// Organization ID
$arg_org_id = "org-id-***";

// Logo - must be a PNG file, exactly 256x256 pixels, smaller than 200KB
$arg_logo = "/path/to/file.txt";

try {
    /**
     * POST /organizations/{orgId}/logo
     * 
     * @var \Kronup\Model\Organization $response
     */
    $response = $sdk
        ->api()
        ->organizations()
        ->logo($arg_org_id, $arg_logo);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->organizations()->logo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->organizations()->logo(): %s\n", 
        $exc->getMessage()
    );
}