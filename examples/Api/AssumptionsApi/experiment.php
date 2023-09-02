<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/AssumptionsApi/#experiment
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

// Team ID
$arg_team_id = "fff";

// Channel ID
$arg_channel_id = "fff";

// Feature ID
$arg_feature_id = "fff";

// Assumption ID
$arg_assm_id = "fff";

$arg_payload_assm_experiment = (new \Kronup\Model\PayloadAssmExperiment())
    
    // (optional) Experiment confirms assumption
    ->setConfirmed(null)
    
    // (optional) Experiment detailed findings
    ->setDetails('null')
    
    // (optional) Experiment state
    ->setState('null');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/features/{featureId}/assms/{assmId}/exp
     * 
     * @var \Kronup\Model\Assumption $response
     */
    $response = $sdk
        ->api()
        ->assumptions()
        ->experiment($arg_team_id, $arg_channel_id, $arg_feature_id, $arg_assm_id, $arg_payload_assm_experiment);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->assumptions()->experiment(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->assumptions()->experiment(): %s\n", 
        $exc->getMessage()
    );
}