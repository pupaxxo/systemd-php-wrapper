<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:43
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListShowTest extends \PHPUnit\Framework\TestCase
{

    public function testShow()
    {
        $wrapper = new \Pupax\SystemdWrapper\Commands\Show(new TestCommandExecutor());
        $systemInfo = $wrapper->show();

        $this->assertEquals(86, count($systemInfo->getProps()));
        $this->assertEquals('info', $systemInfo->getLogLevel());
        $this->assertEquals('1', $systemInfo->getProgress());
    }

    public function testShowUnit()
    {
        $wrapper = new \Pupax\SystemdWrapper\Commands\Show(new TestCommandExecutor());
        $unitInfo = $wrapper->show('cron');

        $this->assertEquals(186, count($unitInfo->getProps()));
        $this->assertEquals('simple', $unitInfo->getType());
        $this->assertEquals('434', $unitInfo->getMainPID());
        $this->assertEquals('cron.service', $unitInfo->getNames());
    }

}