<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ServiceAccountsApi/#close
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

// Service account ID
$arg_account_id = "service-account-id-***";

try {
    /**
     * DELETE /service-accounts/{accountId}
     * 
     * @var \Kronup\Model\ServiceAccount $response
     */
    $response = $sdk
        ->api()
        ->serviceAccounts()
        ->close($arg_account_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->serviceAccounts()->close(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->serviceAccounts()->close(): %s\n", 
        $exc->getMessage()
    );
}