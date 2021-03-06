<?php

use PHPUnit\Framework\TestCase;

class Counter2Test extends TestCase
{
    private static $countFrom = 1;
    private $result;

    public static function setUpBeforeClass()
    {
        self::$countFrom = 2;
    }

    public function setUp()
    {
        $this->result = self::$countFrom;
    }

    public function testAdd()
    {
        $this->result += 1;

        $this->assertEquals(3, $this->result);
    }

    public function testTakeOut()
    {
        $this->result -= 1;

        $this->assertEquals(1, $this->result);
    }
}