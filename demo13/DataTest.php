<?php

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * 可以附加键值信息，那么在执行时会显示更加详细的信息
     * @return array
     */
    public function arrayProvider()
    {
        return [
            'one plus one' => [1, 1, 2],
            'one plus two' => [1, 2, 3],
            'one plus three' => [1, 3, 2]
        ];
    }

    /**
     * @param int $a
     * @param int $b
     * @param int $expected
     * @dataProvider arrayProvider
     */
    public function testAdd($a, $b, $expected)
    {
       $this->assertEquals($expected, $a + $b);
    }
}