<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/TasksApi/#taskfeedbackupdate
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
$arg_team_id = "team-id-***";

// Channel ID
$arg_channel_id = "channel-id-***";

// Value Item ID
$arg_item_id = "value-item-id-***";

// Task ID
$arg_task_id = "task-id-***";

// Feedback ID
$arg_feedback_id = "feedback-id-***";

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_payload_task_feedback_update = (new \Kronup\Model\PayloadTaskFeedbackUpdate())
    
    // (optional) Feedback details
    ->setMessage('null')
    
    // (optional) Feedback issue
    ->setIssue('null');

try {

    /**
     * POST /teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}
     * 
     * @var \Kronup\Model\TaskExpanded $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->taskFeedbackUpdate($arg_team_id, $arg_channel_id, $arg_item_id, $arg_task_id, $arg_feedback_id, $arg_x_org_id, $arg_payload_task_feedback_update);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->taskFeedbackUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->taskFeedbackUpdate(): %s\n", 
        $exc->getMessage()
    );
}