<?php

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    /**
     * willReturn
     */
    public function testStub()
    {
        $stub = $this->createMock(MySomeClass::class);

        $stub->method('doSomething')
            ->willReturn('foo');

        $this->assertEquals('foo', $stub->doSomething());
    }

    /**
     * returnValue
     */
    public function testReturnValue()
    {
        $stub = $this->createMock(MySomeClass::class);

        $stub->method('doSomething')
            ->will($this->returnValue('foo'));

        $this->assertEquals('foo', $stub->doSomething());
    }

    /**
     * returnArgument
     */
    public function testReturnArgument()
    {
        $stub = $this->createMock(MySomeClass::class);

        $stub->method('doSomething')
            ->will($this->returnArgument(0));

        $this->assertEquals('foo', $stub->doSomething('foo'));
    }

    public function testReturnSelf()
    {
        $stub = $this->createMock(MySomeClass::class);

        $map = [
            ['a', 'b', 'c', 'd'],
            ['e', 'f', 'g', 'h']
        ];

        $stub->method('doSomething')
            ->will($this->returnSelf());

        $this->assertEquals($stub, $stub->doSomething());
    }

    public function testReturnValueMap()
    {
        $stub = $this->createMock(MySomeClass::class);

        $map = [
            ['a', 'b', 'c', 'd'],
            ['e', 'f', 'g', 'h']
        ];

        $stub->method('doSomething')
            ->will($this->returnValueMap($map));

        $this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));
        $this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));
    }

    public function testReturnCallback()
    {
        $stub = $this->createMock(MySomeClass::class);

        $stub->method('doSomething')
            ->will($this->returnCallback('str_rot13'));

        $this->assertEquals('fbzrguvat', $stub->doSomething('something'));
    }
}