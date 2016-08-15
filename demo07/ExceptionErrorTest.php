<?php

use PHPUnit\Framework\TestCase;

/**
 * PHPUnit 会把所有捕捉到的错误都转换成 PHPUnit_Framework_Error 异常进行处理。所以我们可以用异常的方式断言错误
 * Class ExceptionErrorTest
 */
class ExceptionErrorTest extends TestCase
{
    /**
     * 使用注释断言错误
     *
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        include 'not_exists_file.php';
    }

    /**
     * 使用 expectException 方法断言错误
     */
    public function testFileWriting()
    {
        $this->expectException(\PHPUnit_Framework_Error_Warning::class);

        fopen('/is_no_writeable/file', 'w');

        //使用@抑制错误，将不会抛出错误
        //@fopen('/is_no_writeable/file', 'w');
    }
}

