<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/AccountApi/#eventslist
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

$arg_page_number = 1;

$arg_page_size = 100;

// Aggregate notion events
$arg_aggregate = 1;

try {
    /**
     * GET /account/events
     * 
     * @var \Kronup\Model\EventsList $response
     */
    $response = $sdk
        ->api()
        ->account()
        ->eventsList($arg_page_number, $arg_page_size, $arg_aggregate);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->eventsList(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->eventsList(): %s\n", 
        $exc->getMessage()
    );
}