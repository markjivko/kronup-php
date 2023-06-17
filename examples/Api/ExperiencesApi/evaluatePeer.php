<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ExperiencesApi/#evaluatepeer
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
$arg_notion_id = "0123456789abcdef01234567";

// Grade between 1 and 10
$arg_grade = "5";

// User ID
$arg_user_id = "0123456789abcdef01234567";

try {
    /**
     * PUT /xp/notions/{notionId}/grade/{grade}/users/{userId}
     * 
     * @var \Kronup\Model\Experience $response
     */
    $response = $sdk
        ->api()
        ->experiences()
        ->evaluatePeer($arg_notion_id, $arg_grade, $arg_user_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->experiences()->evaluatePeer(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->experiences()->evaluatePeer(): %s\n", 
        $exc->getMessage()
    );
}