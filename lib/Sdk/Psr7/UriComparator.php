<?php

declare(strict_types=1);

namespace Kronup\Sdk\Psr7;
!defined("KRONUP-SDK") && exit();

use Kronup\Sdk\Psr7\Http\UriInterface;

/**
 * Provides methods to determine if a modified URL should be considered cross-origin.
 *
 * @author Graham Campbell
 */
final class UriComparator {
    /**
     * Determines if a modified URL should be considered cross-origin with
     * respect to an original URL.
     */
    public static function isCrossOrigin(UriInterface $original, UriInterface $modified): bool {
        if (\strcasecmp($original->getHost(), $modified->getHost()) !== 0) {
            return true;
        }

        if ($original->getScheme() !== $modified->getScheme()) {
            return true;
        }

        if (self::computePort($original) !== self::computePort($modified)) {
            return true;
        }

        return false;
    }

    private static function computePort(UriInterface $uri): int {
        $port = $uri->getPort();

        if (null !== $port) {
            return $port;
        }

        return "https" === $uri->getScheme() ? 443 : 80;
    }

    private function __construct() {
        // cannot be instantiated
    }
}
