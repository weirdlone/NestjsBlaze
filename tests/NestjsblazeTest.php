<?php
/**
 * Tests for NestjsBlaze
 */

use PHPUnit\Framework\TestCase;
use Nestjsblaze\Nestjsblaze;

class NestjsblazeTest extends TestCase {
    private Nestjsblaze $instance;

    protected function setUp(): void {
        $this->instance = new Nestjsblaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nestjsblaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
