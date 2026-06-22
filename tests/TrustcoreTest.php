<?php
/**
 * Tests for TrustCore
 */

use PHPUnit\Framework\TestCase;
use Trustcore\Trustcore;

class TrustcoreTest extends TestCase {
    private Trustcore $instance;

    protected function setUp(): void {
        $this->instance = new Trustcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
