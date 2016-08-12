<?php

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private static $countFrom = 1;
    private $result;

    public function setUp()
    {
        $this->result = self::$countFrom;
    }

    public function testAdd()
    {
        $this->result += 1;

        $this->assertEquals(2, $this->result);
    }

    public function testTakeOut()
    {
        $this->result -= 1;

        $this->assertEquals(0, $this->result);
    }
}