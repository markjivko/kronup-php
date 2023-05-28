<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/AssumptionsApi/#delete
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

try {
    /**
     * DELETE /teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}
     * 
     * @var bool $response
     */
    $response = $sdk
        ->api()
        ->assumptions()
        ->delete($arg_team_id, $arg_channel_id, $arg_item_id, $arg_assm_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->assumptions()->delete(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->assumptions()->delete(): %s\n", 
        $exc->getMessage()
    );
}