<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ShowRow;
use Pupax\SystemdWrapper\Models\ShowUnitRow;
use Pupax\SystemdWrapper\Utils\KeyValueParser;

class Show extends AbstractCommand
{
    /**
     * @param string|null $unit Unit to check (optional)
     *
     * @return ShowRow|ShowUnitRow
     *
     * @throws SystemdFailedException
     */
    public function show($unit = null)
    {
        $command = ['systemctl', 'show'];
        if (null !== $unit) {
            $command[] = $unit;
        }
        $command[] = '--no-pager';

        $processResult = $this->getCommandExecutor()->execute($command);

        if (0 !== $processResult->getExitCode()) {
            throw new SystemdFailedException($processResult);
        }

        $parsed = new KeyValueParser($processResult->getOutput());

        if (null !== $unit) {
            return new ShowUnitRow($parsed);
        }

        return new ShowRow($parsed);
    }
}
