<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.io/Api/NotionsApi/#update
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

// Notion ID
$arg_notion_id = "notion-id-***";

$arg_payload_notion_update = (new \Kronup\Model\PayloadNotionUpdate())
    
    // (optional) Notion value
    ->setValue('null');

try {
    /**
     * POST /notions/{notionId}
     * 
     * @var \Kronup\Model\Notion $response
     */
    $response = $sdk
        ->api()
        ->notions()
        ->update($arg_notion_id, $arg_payload_notion_update);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notions()->update(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notions()->update(): %s\n", 
        $exc->getMessage()
    );
}