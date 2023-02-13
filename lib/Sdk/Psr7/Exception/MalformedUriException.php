<?php

declare(strict_types=1);

/**
 * Malformed URI exception
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   MIT
 * @package   Kronup
 * @author    Mark Jivko
 */
namespace Kronup\Sdk\Psr7\Exception;
!defined("KRONUP-SDK") && exit();

use InvalidArgumentException;

/**
 * Exception thrown if a URI cannot be parsed because it's malformed.
 */
class MalformedUriException extends InvalidArgumentException {
}
