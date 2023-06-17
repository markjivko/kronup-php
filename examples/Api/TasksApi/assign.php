<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#assign
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

// Value item ID
$arg_item_id = "0123456789abcdef01234567";

// Task ID
$arg_task_id = "0123456789abcdef01234567";

// User ID
$arg_user_id = "0123456789abcdef01234567";

try {
    /**
     * PUT /teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/users/{userId}
     * 
     * @var \Kronup\Model\Task $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->assign($arg_team_id, $arg_channel_id, $arg_item_id, $arg_task_id, $arg_user_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->assign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->assign(): %s\n", 
        $exc->getMessage()
    );
}