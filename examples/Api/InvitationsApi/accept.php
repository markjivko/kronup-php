<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/InvitationsApi/#accept
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
$arg_invite_id = "invitation-id-***";

try {
    /**
     * PUT /invitations/{inviteId}
     * 
     * @var \Kronup\Model\Invitation $response
     */
    $response = $sdk
        ->api()
        ->invitations()
        ->accept($arg_invite_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->invitations()->accept(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->invitations()->accept(): %s\n", 
        $exc->getMessage()
    );
}