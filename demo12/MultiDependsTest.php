<?php

use PHPUnit\Framework\TestCase;

class MultiDependsTest extends TestCase
{
    public function testFirst()
    {
        $this->assertTrue(true);
        return 'First';
    }

    public function testSecond()
    {
        $this->assertTrue(true);
        return 'Second';
    }

    /**
     * @param $first
     * @param $second
     * @depends testFirst
     * @depends testSecond
     */
    public function testThird($first, $second)
    {
        $this->assertEquals(['First','Second'], [$first, $second]);
    }

    /**
     * @param $args
     * @depends testFirst
     * @depends testSecond
     */
    public function testFour(...$args)
    {
        $this->assertEquals(['First','Second'], $args);
    }
}