<?php

use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase
{
    public function arrayProvider()
    {
        return [
            [1, 2, 3],
            [6, 7, 8],
            [11, 12, 23]
        ];
    }

    /**
     * @param int $a
     * @param int $b
     * @param int $expected
     * @dataProvider arrayProvider
     */
    public function testEquals($a, $b, $expected)
    {
       $this->assertEquals($expected, $a + $b);
    }
}