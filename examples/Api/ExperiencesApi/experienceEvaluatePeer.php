<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ExperiencesApi/#experienceevaluatepeer
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

// Grade between 1 and 5
$arg_grade = "5";

// Organization ID
$arg_x_org_id = "org-id-***";

try {

    /**
     * PUT /xp/notions/{notionId}/users/{userId}/grade/{grade}
     * 
     * @var \Kronup\Model\Experience $response
     */
    $response = $sdk
        ->api()
        ->experiences()
        ->experienceEvaluatePeer($arg_notion_id, $arg_user_id, $arg_grade, $arg_x_org_id);

    var_export($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->experiences()->experienceEvaluatePeer(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->experiences()->experienceEvaluatePeer(): %s\n", 
        $exc->getMessage()
    );
}