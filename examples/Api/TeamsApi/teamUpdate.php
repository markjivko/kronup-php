<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/TeamsApi/#teamupdate
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

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_payload_team_update = (new \Kronup\Model\PayloadTeamUpdate())
    
    // (optional) Team name
    ->setTeamName('null')
    
    // (optional) Team description
    ->setTeamDesc('null');

try {

    /**
     * POST /teams/{teamId}
     * 
     * @var \Kronup\Model\Team $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->teamUpdate($arg_team_id, $arg_x_org_id, $arg_payload_team_update);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->teamUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->teamUpdate(): %s\n", 
        $exc->getMessage()
    );
}