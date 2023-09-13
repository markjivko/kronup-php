<?php

/**
 * Kronup SDK Debugger
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   MIT
 * @package   Kronup
 * @author    Mark Jivko
 */
namespace Kronup\Sdk;
!defined("KRONUP-SDK") && exit();

use Kronup\Sdk\Config;
use Kronup\Sdk\Psr7\Request;

class Debugger {
    // Sanitization data sources
    const SANITIZE_QUERY = "query";
    const SANITIZE_HEADERS = "headers";
    const SANITIZE_BODY = "body";
    const SANITIZE_URL = "url";

    /**
     * Configuration object
     *
     * @var \Kronup\Sdk\Config
     */
    protected $_config;

    /**
     * File handler
     *
     * @var resource|bool|null
     */
    protected $_fileHandler = null;

    /**
     * Debugger
     *
     * @param \Kronup\Sdk\Config $config
     */
    public function __construct(Config $config) {
        $this->_config = $config;
    }

    /**
     * Initialize the file handler once if the debugger is active
     *
     * @return bool|resource
     */
    protected function _init() {
        if ($this->_config->getDebug() && null === $this->_fileHandler) {
            if (!file_exists($this->_config->getDebugFile()) && is_dir(dirname($this->_config->getDebugFile()))) {
                touch($this->_config->getDebugFile());
            }

            $this->_fileHandler = @fopen($this->_config->getDebugFile(), "a");
        }

        return $this->_fileHandler;
    }

    /**
     * Print debug info
     *
     * @param mixed $data
     * @return void
     */
    public function print($data) {
        if ($this->_init()) {
            fwrite($this->_fileHandler, PHP_EOL . (is_string($data) ? $data : var_export($data, true)));
        }
    }

    /**
     * Log request and response
     *
     * @param \Kronup\Sdk\Psr7\Request $request    Request object
     * @param int                      $resCode    Response - status code
     * @param array                    $resHeaders Response - headers
     * @param string                   $resBody    Response - body
     * @param string                   $resError   Response - error
     * @return void
     */
    public function log(Request $request, int $resCode, $resHeaders, $resBody, $resError) {
        if ($this->_config->getDebug()) {
            // Log the request
            $entry = $this->_getLogTag("<api-call> ", "~");
            $entry .= $this->_getLogRequest($request);
            $entry .= str_repeat(".", 60) . PHP_EOL;

            // Log the response
            $entry .= $this->_getLogResponse($request, $resCode, $resHeaders, $resBody, $resError);
            $entry .= $this->_getLogTag("</api-call>", "~");

            // Print entry
            $this->print($entry);
        }
    }

    /**
     * Sanitize URLs
     *
     * @param string $url         URL
     * @param string $urlTemplate URL Template
     * @return string
     */
    protected function _sanitizeUrl($url, $urlTemplate) {
        // Named capturing groups where available
        $regEx = preg_replace("%\\\{(\w+)\\\}%", '(?<$1>.+?(?=\/|$))', preg_quote($urlTemplate));

        // Use capturing group names to hint the sanitizer
        return preg_replace_callback(
            "%$regEx%i",
            function ($item) use ($urlTemplate) {
                // Sanitize values
                $this->_sanitize($item, self::SANITIZE_URL);

                // Prepare the new URL from template
                $newString = $urlTemplate;
                foreach ($item as $iKey => $iValue) {
                    if (is_string($iKey)) {
                        $newString = str_replace("{" . $iKey . "}", $iValue, $newString);
                    }
                }
                return $newString;
            },
            $url
        );
    }

    /**
     * Sanitize data
     *
     * @param array  $data   Associative array
     * @param string $source
     * @return void
     */
    protected function _sanitize(&$data, $source) {
        /**
         * Sanitize string. Keep the "bearer" prefix
         *
         * @param string $key
         * @param string $string Input
         * @return string Hidden input
         */
        $cleanUp = function ($key, $string) {
            $suffix = preg_replace('%^.*?((?:_\w+)?)$%', '$1', $string);
            $string = preg_replace('%^(.*?)_\w+$%', '$1', $string);

            // Keep prefixes
            $prefix = "";
            if (preg_match("%^(?:bearer\s+)%i", $string, $matches)) {
                $prefix = $matches[0];
                $string = substr($string, strlen($prefix));
            }

            $result =
                strlen($string) >= 10
                    ? preg_replace('%^(\w{3}).*(\w{3})$%', '$1***$2', $string) . $suffix
                    : str_repeat("*", 6);

            return $prefix . $result;
        };

        // Go throught the data
        foreach ($data as $key => &$value) {
            if (preg_match("%^(?:authorization|.*?(?:private|secret).*?)$%i", $key)) {
                if (self::SANITIZE_HEADERS === $source || is_array($value)) {
                    foreach ($value as $vKey => $vData) {
                        $value[$vKey] = $cleanUp($key, $vData);
                    }
                } else {
                    $value = $cleanUp($key, $value);
                }
            }
        }
    }

    /**
     * Save a log delimiter tag
     *
     * @param string $tag       Log tag
     * @param string $character Fill character
     * @return string
     */
    protected function _getLogTag(string $tag, string $character = "#") {
        return str_pad(" $tag ", 60, $character, STR_PAD_BOTH) . PHP_EOL;
    }

    /**
     * Log a cURL request
     *
     * @param \Kronup\Sdk\Psr7\Request $request
     * @return string
     */
    protected function _getLogRequest(Request $request) {
        $eof = " \\\n";

        // Prepare the url
        $url = "{$request->getUri()}";

        // Sanitize URL
        if ($this->_config->getDebugSanitizer()) {
            // Filter-out sensitive data in paths
            $url = $this->_sanitizeUrl($url, $request->getTemplate());

            // Clean-up query arguments
            parse_str($request->getUri()->getQuery(), $queryData);
            if (count($queryData)) {
                $this->_sanitize($queryData, self::SANITIZE_QUERY);
                $url = preg_replace('%\?.*$%', "?" . urldecode(http_build_query($queryData)), $url);
            }
        }

        $curl = "curl -i -X {$request->getMethod()}$eof";
        $curl .= "  '{$url}'$eof";

        // Prepare the headers
        $headers = $request->getHeaders();
        $this->_config->getDebugSanitizer() && $this->_sanitize($headers, self::SANITIZE_HEADERS);
        foreach ($headers as $headerName => $headerValue) {
            $curl .= "  -H '{$headerName}: " . implode("; ", $headerValue) . "'$eof";
        }

        // Body
        if ("GET" !== $request->getMethod()) {
            // Multi-part form data
            if (count($request->getFiles())) {
                foreach ($request->getFiles() as $fieldName => $fileObject) {
                    $fileName = $this->_config->getDebugSanitizer()
                        ? basename($fileObject->getFilename())
                        : $fileObject->getFilename();
                    $curl .= "  -F $fieldName=@{$fileName}$eof";
                }
            } else {
                // JSON payload
                $bodyJson = @json_decode("{$request->getStream()}", true);

                // Sanitizer on
                if ($this->_config->getDebugSanitizer() && is_array($bodyJson)) {
                    $this->_sanitize($bodyJson, self::SANITIZE_BODY);
                }

                // Legibility
                $body = null !== $bodyJson ? json_encode($bodyJson, JSON_PRETTY_PRINT) : "{$request->getStream()}";

                // Append line
                $curl .= strlen($body) ? "  -d '{$body}'{$eof}" : $eof;
            }
        }

        return trim(trim($curl, "\\\n")) . PHP_EOL;
    }

    /**
     * Log a cURL response
     *
     * @param \Kronup\Sdk\Psr7\Request $request    Request object
     * @param int                     $statusCode
     * @param array                   $headers
     * @param string                  $body
     * @param string                  $error
     * @return string
     */
    protected function _getLogResponse($request, int $statusCode, $headers, $body, $error) {
        // Status code
        $response = "Status code: $statusCode\n";

        // Response headers
        $response .= "Headers:\n";
        foreach ($headers as $headerName => $headerValue) {
            if (preg_match("%^(?:content-security-policy|report-to)%i", $headerName)) {
                continue;
            }

            $response .= " * {$headerName}: {$headerValue}\n";
        }

        // Error
        if ($error) {
            $response .= "Error: {$error}\n";
        }

        // File download
        if ($this->_isFileDownload($request)) {
            $response .= "Body: ( binary data )";
        } else {
            // JSON payload
            $response .= "Body: ";
            $responseBody = "( empty )";

            // Attempt decoding
            $bodyJson = @json_decode($body, true);
            if (null !== $bodyJson) {
                if ($this->_config->getDebugSanitizer() && is_array($bodyJson)) {
                    $this->_sanitize($bodyJson, self::SANITIZE_BODY);

                    // Sanitize utxo and address
                    foreach (["fromAddress", "fromUTXO"] as $sKey) {
                        if (isset($bodyJson[$sKey]) && is_array($bodyJson[$sKey])) {
                            $this->_sanitize($bodyJson[$sKey], self::SANITIZE_BODY);
                        }
                    }
                }

                $responseBody = json_encode($bodyJson, JSON_PRETTY_PRINT);
            } else {
                if (strlen(trim($body))) {
                    $responseBody = $body;
                }
            }

            // Trim response
            $response .=
                strlen($responseBody) > 4096
                    ? substr($responseBody, 0, 4093) . "... (" . number_format(strlen($responseBody) / 1024) . " kB)"
                    : $responseBody;
        }

        return $response . PHP_EOL;
    }

    /**
     * Expecting file download?
     *
     * @param \Kronup\Sdk\Psr7\Request $request Request object
     * @return bool
     */
    protected function _isFileDownload($request) {
        $result = false;

        // IPFS download
        if ("GET" === $request->getMethod() && preg_match("%^\/v3\/ipfs\/.+%i", $request->getUri()->getPath())) {
            $result = true;
        }

        return $result;
    }
}
