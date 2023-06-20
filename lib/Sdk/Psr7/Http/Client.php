<?php

/**
 * HTTP Client
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   MIT
 * @package   Kronup
 * @author    Mark Jivko
 */
namespace Kronup\Sdk\Psr7\Http;
!defined("KRONUP-SDK") && exit();

use Kronup\Sdk\Config;
use Kronup\Sdk\Psr7\Response;
use Kronup\Sdk\Psr7\Request;
use Kronup\Sdk\Psr7\Exception\RequestException;

class Client {
    const HTTP_VERSIONS = [
        "1.0" => CURL_HTTP_VERSION_1_0,
        "1.1" => CURL_HTTP_VERSION_1_1,
        "2.0" => CURL_HTTP_VERSION_2_0
    ];

    /**
     * Send an HTTP request with CURL
     *
     * @param \Kronup\Sdk\Psr7\Request $request Request object
     * @param \Kronup\Sdk\Config       $config  Configuration object
     * @return \Kronup\Sdk\Psr7\Response
     * @throws \Kronup\Sdk\Psr7\Exception\RequestException
     */
    public static function send(Request $request, Config $config): Response {
        // Prepare the headers
        $requestHeaders = [];
        $responseHeaders = [];
        foreach ($request->getHeaders() as $headerName => $headerValue) {
            $requestHeaders[] = "$headerName: " . implode("; ", $headerValue);
        }

        $options = [
            CURLOPT_URL => "{$request->getUri()}",
            CURLOPT_ENCODING => "utf-8",
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $requestHeaders,
            CURLOPT_HEADERFUNCTION => function ($ch, $header) use (&$responseHeaders) {
                if ($pos = strpos($header, ":")) {
                    $responseHeaders[trim(substr($header, 0, $pos))] = trim(substr($header, $pos + 1));
                }
                return strlen($header);
            },
            CURLOPT_CUSTOMREQUEST => $request->getMethod(),
            CURLOPT_FAILONERROR => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 20,
            CURLOPT_HTTP_VERSION => isset(self::HTTP_VERSIONS[$request->getProtocolVersion()])
                ? self::HTTP_VERSIONS[$request->getProtocolVersion()]
                : CURL_HTTP_VERSION_NONE
        ];

        // Payload
        if ("GET" !== $request->getMethod()) {
            $options[CURLOPT_POSTFIELDS] = count($request->getFiles())
                ? $request->getFiles()
                : strval($request->getStream());
        }

        // Prepare request
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, $options);

        // Execute the request
        $stream = curl_exec($curlHandle);
        $error = curl_error($curlHandle);
        $info = curl_getinfo($curlHandle);
        curl_close($curlHandle);

        // Log the request
        $config->debugger()->log($request, (int) $info["http_code"], $responseHeaders, "$stream", $error);

        // Prepare the response object
        $response = new Response((int) $info["http_code"], $responseHeaders, "$stream", strval($info["http_version"]));

        // Invalid result
        if ($response->getStatusCode() < 200 || $response->getStatusCode() > 299 || strlen($error)) {
            throw new RequestException($response, $error);
        }

        return $response;
    }
}
