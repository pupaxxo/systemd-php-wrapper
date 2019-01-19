<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListTimersTest extends \PHPUnit\Framework\TestCase
{
    public function testTimers()
    {
        $listTimers = new \Pupax\SystemdWrapper\Commands\ListTimersWrapper(new TestCommandExecutor());
        $timers = $listTimers->getTimers();

        $this->assertEquals(3, count($timers));
        $this->assertEquals('apt-daily.timer', $timers[0]->getUnit());
        $this->assertEquals('apt-daily.service', $timers[0]->getActivates());
    }
}
