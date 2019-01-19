<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListSocketsTest extends \PHPUnit\Framework\TestCase
{
    public function testSockets()
    {
        $wrapper = new \Pupax\SystemdWrapper\Commands\ListSocketsWrapper(new TestCommandExecutor());
        $sockets = $wrapper->getSockets();

        $this->assertEquals(10, count($sockets));
        $this->assertEquals('/run/systemd/fsck.progress', $sockets[0]->getListen());
        $this->assertEquals('systemd-fsckd.socket', $sockets[0]->getUnit());
        $this->assertEquals('systemd-fsckd.service', $sockets[0]->getActivates());
    }
}
