<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#list
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
$arg_team_id = "fff";

// Channel ID
$arg_channel_id = "fff";

// Value Item ID
$arg_item_id = "fff";

$arg_page_number = 1;

$arg_page_size = 100;

try {
    /**
     * GET /teams/{teamId}/channels/{channelId}/items/{itemId}/tasks
     * 
     * @var \Kronup\Model\TasksList $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->list($arg_team_id, $arg_channel_id, $arg_item_id, $arg_page_number, $arg_page_size);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->list(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->list(): %s\n", 
        $exc->getMessage()
    );
}