<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new MyCalculator();

        $this->assertEquals(2, $calculator->add(1, 1));
    }
}