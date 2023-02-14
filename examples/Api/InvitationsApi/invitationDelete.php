<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/InvitationsApi/#invitationdelete
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

// Invitation ID
$arg_id = "invitation-id-xxxx";

// Organization ID
$arg_x_org_id = "org-id-xxxx";

try {

    /**
     * DELETE /invitations/{id}
     */
    $sdk
        ->api()
        ->invitations()
        ->invitationDelete($arg_id, $arg_x_org_id);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->invitations()->invitationDelete(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->invitations()->invitationDelete(): %s\n", 
        $exc->getMessage()
    );
}