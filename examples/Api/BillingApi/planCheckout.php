<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/BillingApi/#plancheckout
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

// Price Plan ID
$arg_price_plan_id = "fff";

// Use dark mode
$arg_dark_mode = 1;

try {
    /**
     * GET /billing/price-plans/{pricePlanId}
     * 
     * @var \Kronup\Model\Checkout $response
     */
    $response = $sdk
        ->api()
        ->billing()
        ->planCheckout($arg_price_plan_id, $arg_dark_mode);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->billing()->planCheckout(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->billing()->planCheckout(): %s\n", 
        $exc->getMessage()
    );
}