<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/NotionsApi/#notionsearch
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

// Search term
$arg_search_term = 'search_term_example';

// Pagination: page number
$arg_page_number = 1;

// Pagination: page size
$arg_page_size = 100;

try {

    /**
     * GET /notions
     * 
     * @var \Kronup\Model\NotionsList $response
     */
    $response = $sdk
        ->api()
        ->notions()
        ->notionSearch($arg_x_org_id, $arg_search_term, $arg_page_number, $arg_page_size);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notions()->notionSearch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notions()->notionSearch(): %s\n", 
        $exc->getMessage()
    );
}