<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.io/Api/TeamsApi/#create
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

$arg_payload_team_create = (new \Kronup\Model\PayloadTeamCreate())
    
    // Team name
    ->setTeamName('null');

try {
    /**
     * POST /teams
     * 
     * @var \Kronup\Model\TeamExtended $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->create($arg_payload_team_create);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->create(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->create(): %s\n", 
        $exc->getMessage()
    );
}