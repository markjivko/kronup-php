<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ValueItemsApi/#valueitemupdate
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

// Value item ID
$arg_item_id = "value-item-id-***";

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_payload_value_item_update = (new \Kronup\Model\PayloadValueItemUpdate())
    
    // (optional) Value item digest
    ->setDigest('Feature name')
    
    // (optional) Value item description
    ->setDetails('Feature description')
    
    // (optional) Value item type:  * f - Feature  * b - Bug fix  * c - Chore
    ->setType('feature')
    
    // (optional) Value item MoSCoW priority:  * m - Must-have  * s - Should-have  * c - Could-have  * w - Will NOT...
    ->setPriority('must');

try {

    /**
     * POST /teams/{teamId}/channels/{channelId}/items/{itemId}
     * 
     * @var \Kronup\Model\ValueItem $response
     */
    $response = $sdk
        ->api()
        ->valueItems()
        ->valueItemUpdate($arg_team_id, $arg_channel_id, $arg_item_id, $arg_x_org_id, $arg_payload_value_item_update);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->valueItems()->valueItemUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->valueItems()->valueItemUpdate(): %s\n", 
        $exc->getMessage()
    );
}