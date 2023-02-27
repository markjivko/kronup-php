<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ValueItemsApi/#valueitemcreate
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

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_request_value_item_create = (new \Kronup\Model\RequestValueItemCreate())
    
    // (optional) Value item digest
    ->setDigest('Feature name')
    
    // (optional) Value item description
    ->setDetails('Feature description')
    
    // (optional) Value item type  <ul> <li><code>f</code> - Feature</li> <li><code>b</code> - Bug fix</li> <li><co...
    ->setType('f')
    
    // (optional) Value item MoSCoW priority <ul> <li><code>m</code> - Must-have</li> <li><code>s</code> - Should-h...
    ->setPriority('m');

try {

    /**
     * POST /teams/{teamId}/channels/{channelId}/items
     * 
     * @var \Kronup\Model\ValueItem $response
     */
    $response = $sdk
        ->api()
        ->valueItems()
        ->valueItemCreate($arg_team_id, $arg_channel_id, $arg_x_org_id, $arg_request_value_item_create);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->valueItems()->valueItemCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->valueItems()->valueItemCreate(): %s\n", 
        $exc->getMessage()
    );
}