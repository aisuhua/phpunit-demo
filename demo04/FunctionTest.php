<?php

require_once 'functions.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testFindSum()
    {
        $array = [0, 1, 2, 3, 6, 7, 8, 9, 11, 12, 14];
        $result = ['group' => '6,7,8,9', 'sum' => 30];

        $this->assertSame($result, findSum($array));
    }

    public function testCompareArrays()
    {
        $array1 = [0, 1, 2, 3];
        $array2 = [6, 7, 8, 9];

        $this->assertEquals(-1, compareArrays($array1, $array2));

        $this->assertEquals(1, compareArrays($array2, $array1));

        $this->assertEquals(0, compareArrays($array2, $array2));
    }
}