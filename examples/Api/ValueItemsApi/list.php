<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ValueItemsApi/#list
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

// Team ID
$arg_team_id = "0123456789abcdef01234567";

// Channel ID
$arg_channel_id = "0123456789abcdef01234567";

// Value item stage
$arg_stage = "planning";

// Pagination: page number
$arg_page_number = 1;

// Pagination: page size
$arg_page_size = 100;

try {
    /**
     * GET /teams/{teamId}/channels/{channelId}/items
     * 
     * @var \Kronup\Model\ValueItemsList $response
     */
    $response = $sdk
        ->api()
        ->valueItems()
        ->list($arg_team_id, $arg_channel_id, $arg_stage, $arg_page_number, $arg_page_size);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->valueItems()->list(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->valueItems()->list(): %s\n", 
        $exc->getMessage()
    );
}