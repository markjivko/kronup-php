<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/AssumptionsApi/#update
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

// Assumption ID
$arg_assm_id = "assm-id-***";

$arg_payload_assm_update = (new \Kronup\Model\PayloadAssmUpdate())
    
    // (optional) Assumption heading
    ->setHeading('Feature name');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}
     * 
     * @var \Kronup\Model\Assumption $response
     */
    $response = $sdk
        ->api()
        ->assumptions()
        ->update($arg_team_id, $arg_channel_id, $arg_item_id, $arg_assm_id, $arg_payload_assm_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->assumptions()->update(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->assumptions()->update(): %s\n", 
        $exc->getMessage()
    );
}