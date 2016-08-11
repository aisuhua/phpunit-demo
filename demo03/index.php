<?php

use PHPUnit\Framework\TestCase;

class ThirdTest extends TestCase
{
    public function testAsort()
    {
        $array = [
            'pear' => 10.2,
            'banana' => 9,
            'apple' => 20.5,
            'grape' => 15.2
        ];

        $result = [
            'banana' => 9,
            'pear' => 10.2,
            'grape' => 15.2,
            'apple' => 20.5
        ];

        asort($array);

        $this->assertSame($result, $array);
    }

    public function testKsort()
    {
        $array = [
            'pear' => 10.2,
            'banana' => 9,
            'apple' => 20.5,
            'grape' => 15.2
        ];

        $result = [
            'apple' => 20.5,
            'banana' => 9,
            'grape' => 15.2,
            'pear' => 10.2
        ];

        ksort($array);

        $this->assertSame($result, $array);
    }
}