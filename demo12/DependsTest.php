<?php

use PHPUnit\Framework\TestCase;

class DependsTest extends TestCase
{
    public function testFill()
    {
        $array = array_fill(0, 11, 1);

        $this->assertEquals(11, count($array));

        return $array;
    }

    /**
     * @param array $inputArray
     * @return array
     * @depends testFill
     */
    public function testPop(array $inputArray)
    {
        array_pop($inputArray);

        $this->assertEquals(10, count($inputArray));

        return $inputArray;
    }

    /**
     * @param array $inputArray
     * @depends testPop
     */
    public function testSum(array $inputArray)
    {
        $sum = array_sum($inputArray);

        $this->assertEquals(10, $sum);
    }
}