<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/AssumptionsApi/#create
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

$arg_payload_assm_create = (new \Kronup\Model\PayloadAssmCreate())
    
    // (optional) Assumption heading
    ->setHeading('This thing is possible');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/items/{itemId}/assms
     * 
     * @var \Kronup\Model\Assumption $response
     */
    $response = $sdk
        ->api()
        ->assumptions()
        ->create($arg_team_id, $arg_channel_id, $arg_item_id, $arg_payload_assm_create);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->assumptions()->create(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->assumptions()->create(): %s\n", 
        $exc->getMessage()
    );
}