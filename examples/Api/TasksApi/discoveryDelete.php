<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#discoverydelete
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

// Feature ID
$arg_feature_id = "fff";

// Task ID
$arg_task_id = "fff";

// Discovery ID
$arg_discovery_id = "fff";

try {
    /**
     * DELETE /teams/{teamId}/channels/{channelId}/features/{featureId}/tasks/{taskId}/discoveries/{discoveryId}
     * 
     * @var bool $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->discoveryDelete($arg_team_id, $arg_channel_id, $arg_feature_id, $arg_task_id, $arg_discovery_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->discoveryDelete(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->discoveryDelete(): %s\n", 
        $exc->getMessage()
    );
}