<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/TeamsApi/#listuser
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

// User ID
$arg_user_id = "user-id-***";

// Pagination: page number
$arg_page_number = 1;

// Pagination: page size
$arg_page_size = 100;

try {
    /**
     * GET /teams/users/{userId}
     * 
     * @var \Kronup\Model\TeamsExtendedList $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->listUser($arg_user_id, $arg_page_number, $arg_page_size);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->listUser(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->listUser(): %s\n", 
        $exc->getMessage()
    );
}