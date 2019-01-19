<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ListTimersRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListTimersWrapper extends AbstractCommandWrapper
{
    /**
     * @return ListTimersRow[]
     *
     * @throws SystemdFailedException
     */
    public function getTimers()
    {
        $processResult = $this->getCommandExecutor()->execute([$this->getCommandExecutor()->getSystemCtlBinary(), 'list-timers', '--all', '--no-pager']);

        if (0 !== $processResult->getExitCode()) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());

        return array_map(function ($row) {
            return new ListTimersRow($row['next'], $row['left'], $row['last'], $row['passed'], $row['unit'], $row['activates']);
        }, $table->getRowsAssoc());
    }
}
