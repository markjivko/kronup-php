<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TeamsApi/#read
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
$arg_team_id = "0123456789abcdef01234567";

try {
    /**
     * GET /teams/{teamId}
     * 
     * @var \Kronup\Model\TeamExpanded $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->read($arg_team_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->read(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->read(): %s\n", 
        $exc->getMessage()
    );
}