<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/UsersApi/#updaterole
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

// User ID
$arg_user_id = "fff";

$arg_payload_user_role_update = (new \Kronup\Model\PayloadUserRoleUpdate())
    
    // (optional) New site role
    ->setRoleSite('user')
    
    // (optional) New organization role
    ->setRoleOrg('member');

try {
    /**
     * POST /users/{userId}
     * 
     * @var \Kronup\Model\UserRoles $response
     */
    $response = $sdk
        ->api()
        ->users()
        ->updateRole($arg_user_id, $arg_payload_user_role_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->users()->updateRole(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->users()->updateRole(): %s\n", 
        $exc->getMessage()
    );
}