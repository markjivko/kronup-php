<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/UsersApi/#userupdaterole
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
$arg_id = "user-id-***";

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_user_update_role_request = (new \Kronup\Model\UserUpdateRoleRequest())
    
    // (optional) New site role
    ->setRoleSite('user')
    
    // (optional) New organization role
    ->setRoleOrg('member');

try {

    /**
     * POST /users/{id}
     * 
     * @var \Kronup\Model\UserUpdateRole200Response $response
     */
    $response = $sdk
        ->api()
        ->users()
        ->userUpdateRole($arg_id, $arg_x_org_id, $arg_user_update_role_request);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->users()->userUpdateRole(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->users()->userUpdateRole(): %s\n", 
        $exc->getMessage()
    );
}