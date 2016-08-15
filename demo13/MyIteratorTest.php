<?php

require_once('MyIterator.php');

use PHPUnit\Framework\TestCase;

class MyIteratorTest extends TestCase
{
    public function iteratorProvider()
    {
        return new MyIterator();
    }

    /**
     * @param string $element
     * @dataProvider iteratorProvider
     */
    public function testIterator($element)
    {
        $this->assertTrue((strpos($element, 'element') !== false));
    }
}