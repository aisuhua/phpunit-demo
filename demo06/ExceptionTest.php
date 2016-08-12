<?php

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * 使用注释断言出现异常
     *
     * @expectedException \InvalidArgumentException
     */
    public function testException1()
    {
        throw new \InvalidArgumentException('参数不正确');
    }

    /**
     * 使用 expectException 方法断言出现异常
     */
    public function testException2()
    {
        $this->expectException(\InvalidArgumentException::class);

        throw new \InvalidArgumentException('参数不正确');
    }
}

