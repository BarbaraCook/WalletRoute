<?php
/**
 * Tests for WalletRoute
 */

use PHPUnit\Framework\TestCase;
use Walletroute\Walletroute;

class WalletrouteTest extends TestCase {
    private Walletroute $instance;

    protected function setUp(): void {
        $this->instance = new Walletroute(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletroute::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
