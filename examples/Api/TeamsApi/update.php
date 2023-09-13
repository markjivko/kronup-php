<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/TeamsApi/#update
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

$arg_payload_team_update = (new \Kronup\Model\PayloadTeamUpdate())
    
    // (optional) Team name
    ->setTeamName('null');

try {
    /**
     * POST /teams/{teamId}
     * 
     * @var \Kronup\Model\TeamExpanded $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->update($arg_team_id, $arg_payload_team_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->update(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->update(): %s\n", 
        $exc->getMessage()
    );
}