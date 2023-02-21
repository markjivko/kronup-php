<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ValueItemsApi/#itemcreate
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

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_item_create_request = (new \Kronup\Model\ItemCreateRequest())
    
    // (optional) Value item digest
    ->setDigest('null')
    
    // (optional) Value item description
    ->setDetails('null');

try {

    /**
     * POST /items
     * 
     * @var \Kronup\Model\Item $response
     */
    $response = $sdk
        ->api()
        ->valueItems()
        ->itemCreate($arg_x_org_id, $arg_item_create_request);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->valueItems()->itemCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->valueItems()->itemCreate(): %s\n", 
        $exc->getMessage()
    );
}