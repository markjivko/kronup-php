---
title: Overview
layout: home
nav_order: 1
---

<p align="center">
    <a href="https://api.kronup.com">
      <img src="images/kronup.png"/>
    </a>
</p>

# Kronup SDK for PHP
{: .fs-9 }

Build any Kronup application in PHP with ease.
{: .fs-6 .fw-300 }

[Install with Composer](https://packagist.org/packages/kronup/kronup-php){: .btn .btn-primary .fs-5 .mb-4 .mb-md-0 .mr-2 }
[Clone from GitHub](https://github.com/kronup/kronup-php){: .btn .fs-5 .mb-4 .mb-md-0 }

---

Kronup SDK uses a [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface) so that you can jump right into 
building your application without having to go back to the documentation.

The SDK is built like a tree with its root in ```new \Kronup\Sdk()```. 

Tree branches are populated as needed just-in-time so the memory footprint is tiny.

## Table of Contents
- [API Key](#api-key)
- [Installation & Usage](#installation--usage)
  - [Requirements](#requirements)
- [Getting Started](#getting-started)
  - [Examples](#examples)
  - [Tests](#tests)
  - [Configuration](#configuration)
  - [Debugging](#debugging)
    - [Enable debugging](#enable-debugging)
    - [Change output location](#change-output-location)
    - [Disable sanitizer](#disable-sanitizer)

## API Key

The Kronup API uses a standard [JWT](https://en.wikipedia.org/wiki/JSON_Web_Token) authentication scheme. 

You can manage your API keys from 👉 [Organization > Service Accounts](https://go.kronup.com/organization/#/tab:service-accounts).

## Installation & Usage

To install the Kronup SDK, simply clone this repository and load it with a [PSR-4](https://www.php-fig.org/psr/psr-4/) autoloader.
If you're having doubts, you can use the provided `autoload.php` file.

You can also install the latest version of `Kronup PHP SDK` with **composer** by issuing the following command:

```
composer require kronup/kronup-php
```

This SDK has no external dependencies in production. 

This means you can use this library in any PHP project even when you don't have access to Composer.

### Requirements

This SDK requires `PHP 7.4` or later with the following extensions:

 * `ext-mbstring`
 * `ext-curl`
 * `ext-json`

Supported PHP [Versions](https://www.php.net/supported-versions.php): `7.4`, `8.0`, `8.1`, `8.2`.

## Getting Started

Please follow the [installation procedure](#installation--usage) then create an entrypoint PHP file with the following:

```php
<?php

// Import a PSR-4 autoloader
require_once(__DIR__ . '/autoload.php');

// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// 🐛 Enable debugging
$sdk->config()->setDebug(true);

try {

    /**
     * @var \Kronup\Model\Account $account
     */
    $account = $this->sdk->api()->account()->read();

    // Say hello
    echo sprintf('Hello, %s!', $account->getUserName());

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->read(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->read(): " . $exc->getMessage() . PHP_EOL;
}
```

### Examples

To run the examples, use:

```bash
php -f ./examples/{path-to-example-file}.php
```

For security reasons you cannot execute these files from a server request.

### Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```

### Configuration

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// Configuration object
$sdk->config();
```

You can fetch the following:

  * [Debugging](#debugging) tools
  * `getApiKey()`: Your Kronup API key
  * `getTempFolderPath()`: Path for storing downloaded files
  * `getUserAgent()`: Request header for API calls
  * `getHost()`: API server domain
  * `getVersions()` - array containing:
    * Operating System version
    * PHP version
    * OpenAPI specification version
    * SDK version

You can change the following:

  * [Debugging](#debugging) tools
  * `setApiKey()`
  * `setTempFolderPath()`

### Debugging

The debugger allows you to get detailed information on API requests made by the SDK.

#### Enable debugging

Debugging is disabled by default but you can enable it with ease:

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// Enable debugging
$sdk->config()->setDebug(true);
```

Notice that the debugger functionality is strictly tied to your `$sdk` instance.

#### Change output location

If you have enabled debugging, additional information will be written to the specified location.

By default, the write location for the `debugger` is your standard CLI output, or `php://output`.

You can redirect the output of the debugger to any other file:

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// Set debug output
$sdk->config()->setDebugFile('/path/to/file.log');
```

#### Disable sanitizer

By default, sensitive values are partially obfuscated.
You can disable this functionality for local testing only.

**WARNING**: Never share logs that were produced with the `debug sanitizer` turned off!

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// Disable debug sanitizer
$sdk->config()->setDebugSanitizer(false);
```