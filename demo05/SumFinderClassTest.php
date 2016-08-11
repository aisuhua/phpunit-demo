<?php

require_once 'SumFinderClass.php';

use PHPUnit\Framework\TestCase;

class SumFinderClassTest extends TestCase
{
    public function testFindSum()
    {
        $array = [0, 1, 2, 3, 6, 7, 8, 9, 11, 12, 14];
        $result = ['group' => '6,7,8,9', 'sum' => 30];

        $sumFinder = new SumFinderClass($array);

        $this->assertSame($result, $sumFinder->findSum());
    }

    public function testCompareArrays()
    {
        $array1 = [0, 1, 2, 3];
        $array2 = [6, 7, 8, 9];

        $sumFinder = new SumFinderClass();

        $this->assertEquals(-1, $sumFinder->compareArrays($array1, $array2));

        $this->assertEquals(1, $sumFinder->compareArrays($array2, $array1));

        $this->assertEquals(0, $sumFinder->compareArrays($array2, $array2));
    }
}

