<?php

use PHPUnit\Framework\TestCase;

class GlobalTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        $config = new \stdClass();
        $config->date = new \DateTime('today');

        $GLOBALS['config'] = $config;
    }

    public function testToday()
    {
        $today = new \DateTime('today');
        $this->assertEquals($today, $GLOBALS['config']->date);

        //由于默认开启了备份，所以这里修改全局变量的值没有任何影响
        $GLOBALS['config']->date = new \DateTime('tomorrow');
    }

    /**
     * @backupGlobals disabled
     */
    public function testTomorrow()
    {
        $tomorrow = new \DateTime('tomorrow');
        $this->assertTrue($tomorrow > $GLOBALS['config']->date);

        //由于关闭了备份，所以这里修改全局变量会直接改变它的值
        $GLOBALS['config']->date = $tomorrow;
    }

    public function testTomorrowIsolated()
    {
        $tomorrow = new \DateTime('tomorrow');
        $this->assertEquals($tomorrow, $GLOBALS['config']->date);
    }

}