<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:43
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListSocketsTest extends \PHPUnit\Framework\TestCase
{

    public function testSockets()
    {
        $wrapper = new \Pupax\SystemdWrapper\Commands\ListSockets(new TestCommandExecutor());
        $sockets = $wrapper->getSockets();

        $this->assertEquals(10, count($sockets));
        $this->assertEquals('/run/systemd/fsck.progress', $sockets[0]->getListen());
        $this->assertEquals('systemd-fsckd.socket', $sockets[0]->getUnit());
        $this->assertEquals('systemd-fsckd.service', $sockets[0]->getActivates());
    }

}