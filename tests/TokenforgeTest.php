<?php
/**
 * Tests for TokenForge
 */

use PHPUnit\Framework\TestCase;
use Tokenforge\Tokenforge;

class TokenforgeTest extends TestCase {
    private Tokenforge $instance;

    protected function setUp(): void {
        $this->instance = new Tokenforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
