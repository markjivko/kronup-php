<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ExperiencesApi/#read
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

// User ID
$arg_user_id = "user-id-***";

try {
    /**
     * GET /xp/notions/{notionId}/users/{userId}
     * 
     * @var \Kronup\Model\Experience $response
     */
    $response = $sdk
        ->api()
        ->experiences()
        ->read($arg_notion_id, $arg_user_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->experiences()->read(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->experiences()->read(): %s\n", 
        $exc->getMessage()
    );
}