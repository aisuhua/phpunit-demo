<?php

use PHPUnit\Framework\TestCase;

/**
 * 跳过测试，两种方法，使用方法markTestSkipped或使用注释
 * Class SkippingTest
 */
class SkippingTest extends TestCase
{

    /**
     * 使用 markTestSkipped 跳过该段测试
     */
    public function testVersion1()
    {
        if(version_compare(PHP_VERSION, '7.0.0') < 0) {
            $this->markTestSkipped(
                '本脚本只能在 PHP7.0.0 版本以上执行'
            );
        }

        $this->assertEquals(2, 1 + 2);
    }

    /**
     * 使用注释判断，是否跳过该段测试
     *
     * @requires PHP 7.0.0
     */
    public function testVersion2()
    {
        $this->assertEquals(2, 1 + 2);
    }
}