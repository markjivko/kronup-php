<?php
/**
 * Exception Test
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   MIT
 * @package   Kronup
 * @author    Mark Jivko
 */

namespace Kronup\Test\Local\Api;
!class_exists("\Kronup\Sdk") && exit();

use Kronup\Sdk;
use Kronup\Sdk\ApiException;
use PHPUnit\Framework\TestCase;

/**
 * Exception Test
 *
 * @coversDefaultClass \Kronup\Local\Wallet
 */
class ExceptionTest extends TestCase {
    /**
     * Kronup SDK
     *
     * @var \Kronup\Sdk
     */
    protected $sdk;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk("my-api-key");
    }

    /**
     * Unauthorized
     */
    public function testUnauthorized(): void {
        $this->expectExceptionObject(new ApiException("Unauthorized", 401));
        $this->sdk
            ->api()
            ->users()
            ->list();
    }
}
