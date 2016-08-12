<?php

use PHPUnit\Framework\TestCase;

class ResultTest extends TestCase
{
    public function testSucceeds()
    {
        $this->assertEquals(2, 2/1);
    }

    public function testFails()
    {
        $this->assertEquals(2, 2/2);
    }

    public function testError()
    {
        $this->assertEquals(2, 2/0);
    }

    public function testSkipped()
    {
        $this->markTestSkipped('由于某些原因，这里被跳过而不执行测试。');

        $this->assertEquals(2, 2/1);
    }

    public function testIncomplete()
    {
        $this->markTestIncomplete('这里需要先实现好了以后，才执行测试。');

        $this->assertEquals(2, 2/1);
    }
}