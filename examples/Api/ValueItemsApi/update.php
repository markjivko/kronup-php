<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ValueItemsApi/#update
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

// Value item ID
$arg_item_id = "fff";

$arg_payload_value_item_update = (new \Kronup\Model\PayloadValueItemUpdate())
    
    // (optional) Value item heading
    ->setHeading('Feature name')
    
    // (optional) Value item description
    ->setDetails('Feature description')
    
    // (optional) Value item type
    ->setType('feature')
    
    // (optional) Value item priority
    ->setPriority(1);

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/items/{itemId}
     * 
     * @var \Kronup\Model\ValueItem $response
     */
    $response = $sdk
        ->api()
        ->valueItems()
        ->update($arg_team_id, $arg_channel_id, $arg_item_id, $arg_payload_value_item_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->valueItems()->update(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->valueItems()->update(): %s\n", 
        $exc->getMessage()
    );
}