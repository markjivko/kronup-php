<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/OrganizationsApi/#organizationupdate
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
$arg_org_id = "org-id-***";

$arg_payload_organization_update = (new \Kronup\Model\PayloadOrganizationUpdate())
    
    // (optional) Organization name
    ->setOrgName('Example, Inc.');

try {

    /**
     * POST /organizations/{orgId}
     * 
     * @var \Kronup\Model\Organization $response
     */
    $response = $sdk
        ->api()
        ->organizations()
        ->organizationUpdate($arg_org_id, $arg_payload_organization_update);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->organizations()->organizationUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->organizations()->organizationUpdate(): %s\n", 
        $exc->getMessage()
    );
}