<?php

use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testNull()
    {
        $this->assertNull('foo');
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $this->assertFalse(true);
    }

    public function testEmpty()
    {
        $this->assertEmpty(['foo']);
    }

    public function testEquals()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
