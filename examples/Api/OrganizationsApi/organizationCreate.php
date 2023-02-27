<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/OrganizationsApi/#organizationcreate
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

$arg_request_organization_create = (new \Kronup\Model\RequestOrganizationCreate())
    
    // (optional) Organization name
    ->setOrgName('Example, Inc.');

try {

    /**
     * POST /organizations
     * 
     * @var \Kronup\Model\Organization $response
     */
    $response = $sdk
        ->api()
        ->organizations()
        ->organizationCreate($arg_request_organization_create);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->organizations()->organizationCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->organizations()->organizationCreate(): %s\n", 
        $exc->getMessage()
    );
}