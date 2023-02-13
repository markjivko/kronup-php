<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/AccountApi/#accountupdate
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";


$arg_account_update_request = (new \Kronup\Model\AccountUpdateRequest())
    
    // (optional) New user name
    ->setUserName('John Doe');

try {

    /**
     * POST /account
     * 
     * @var \Kronup\Model\AccountUpdate200Response $response
     */
    $response = $sdk
        ->api()
        ->account()
        ->accountUpdate($arg_account_update_request);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->accountUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->accountUpdate(): %s\n", 
        $exc->getMessage()
    );
}