<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#feedbackreply
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

// Feedback ID
$arg_feedback_id = "fff";

$arg_payload_task_feedback_reply = (new \Kronup\Model\PayloadTaskFeedbackReply())
    
    // (optional) Feedback reply
    ->setReply('null');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/features/{featureId}/tasks/{taskId}/feedback/{feedbackId}/reply
     * 
     * @var \Kronup\Model\MinuteFeedback $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->feedbackReply($arg_team_id, $arg_channel_id, $arg_feature_id, $arg_task_id, $arg_feedback_id, $arg_payload_task_feedback_reply);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->feedbackReply(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->feedbackReply(): %s\n", 
        $exc->getMessage()
    );
}