<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ListUnitsRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListUnitsWrapper extends AbstractCommandWrapper
{
    /**
     * @return ListUnitsRow[]
     *
     * @throws SystemdFailedException
     */
    public function getUnits()
    {
        $processResult = $this->getCommandExecutor()->execute([$this->getCommandExecutor()->getSystemCtlBinary(), 'list-units', '--all', '--no-pager']);

        if (0 !== $processResult->getExitCode()) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());

        return array_map(function ($row) {
            return new ListUnitsRow($row['unit'], $row['load'], $row['active'], $row['sub'], $row['description']);
        }, $table->getRowsAssoc());
    }
}
