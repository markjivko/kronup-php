<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/TeamChannelsApi/#teamchannelupdate
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

$arg_team_channel_create_request = (new \Kronup\Model\TeamChannelCreateRequest())
    
    // (optional) Channel name
    ->setChannelName('null')
    
    // (optional) Channel description
    ->setChannelDesc('null');

try {

    /**
     * POST /teams/{teamId}/channel/{channelId}
     * 
     * @var \Kronup\Model\Team $response
     */
    $response = $sdk
        ->api()
        ->teamChannels()
        ->teamChannelUpdate($arg_team_id, $arg_channel_id, $arg_x_org_id, $arg_team_channel_create_request);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teamChannels()->teamChannelUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teamChannels()->teamChannelUpdate(): %s\n", 
        $exc->getMessage()
    );
}