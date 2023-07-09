<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TeamsApi/#assign
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
$arg_team_id = "000000000000000000000000";

// User ID
$arg_user_id = "000000000000000000000000";

try {
    /**
     * PUT /teams/{teamId}/users/{userId}
     * 
     * @var \Kronup\Model\User $response
     */
    $response = $sdk
        ->api()
        ->teams()
        ->assign($arg_team_id, $arg_user_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teams()->assign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teams()->assign(): %s\n", 
        $exc->getMessage()
    );
}