<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#delete
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

try {
    /**
     * DELETE /teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}
     * 
     * @var bool $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->delete($arg_team_id, $arg_channel_id, $arg_item_id, $arg_task_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->delete(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->delete(): %s\n", 
        $exc->getMessage()
    );
}