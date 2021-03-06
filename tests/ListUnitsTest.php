<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListUnitsTest extends \PHPUnit\Framework\TestCase
{
    public function testUnits()
    {
        $listUnits = new \Pupax\SystemdWrapper\Commands\ListUnitsWrapper(new TestCommandExecutor());
        $units = $listUnits->getUnits();

        $this->assertEquals(175, count($units));
        $this->assertEquals('proc-sys-fs-binfmt_misc.automount', $units[0]->getUnit());
        $this->assertEquals('Arbitrary Executable File Formats File System Automount Point', $units[0]->getDescription());
    }
}
