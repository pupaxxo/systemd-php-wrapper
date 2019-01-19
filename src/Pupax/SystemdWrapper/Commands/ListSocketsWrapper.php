<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ListSocketsRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListSocketsWrapper extends AbstractCommandWrapper
{
    /**
     * @return ListSocketsRow[]
     *
     * @throws SystemdFailedException
     */
    public function getSockets()
    {
        $processResult = $this->getCommandExecutor()->execute([$this->getCommandExecutor()->getSystemCtlBinary(), 'list-sockets', '--all', '--no-pager']);

        if (0 !== $processResult->getExitCode()) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());

        return array_map(function ($row) {
            return new ListSocketsRow($row['listen'], $row['unit'], $row['activates']);
        }, $table->getRowsAssoc());
    }
}
