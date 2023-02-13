<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/UsersApi/#userlist
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";


// Organization ID
$arg_x_org_id = "org-id-xxxx";

// Pagination: page number
$arg_page_number = 1;

// Pagination: page size
$arg_page_size = 100;

try {

    /**
     * GET /users
     * 
     * @var \Kronup\Model\UserList200Response $response
     */
    $response = $sdk
        ->api()
        ->users()
        ->userList($arg_x_org_id, $arg_page_number, $arg_page_size);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->users()->userList(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->users()->userList(): %s\n", 
        $exc->getMessage()
    );
}