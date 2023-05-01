<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ChannelsApi/#update
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

$arg_payload_channel_update = (new \Kronup\Model\PayloadChannelUpdate())
    
    // (optional) Channel name
    ->setChannelName('null')
    
    // (optional) Channel description
    ->setChannelDesc('null');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}
     * 
     * @var \Kronup\Model\TeamExtended $response
     */
    $response = $sdk
        ->api()
        ->channels()
        ->update($arg_team_id, $arg_channel_id, $arg_x_org_id, $arg_payload_channel_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->channels()->update(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->channels()->update(): %s\n", 
        $exc->getMessage()
    );
}