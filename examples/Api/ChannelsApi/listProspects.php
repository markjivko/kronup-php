<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ChannelsApi/#listprospects
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

// Wildcard for prospect user name
$arg_user_name = "John Doe";

try {
    /**
     * GET /teams/{teamId}/channels/{channelId}/prospects
     * 
     * @var \Kronup\Model\ChannelProspectsList $response
     */
    $response = $sdk
        ->api()
        ->channels()
        ->listProspects($arg_team_id, $arg_channel_id, $arg_user_name);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->channels()->listProspects(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->channels()->listProspects(): %s\n", 
        $exc->getMessage()
    );
}