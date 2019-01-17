<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 20:42
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ShowRow;
use Pupax\SystemdWrapper\Models\ShowUnitRow;
use Pupax\SystemdWrapper\Utils\KeyValueParser;

class Show extends AbstractCommand
{

    /**
     * @param null|string $unit Unit to check (optional)
     * @return ShowRow|ShowUnitRow
     * @throws SystemdFailedException
     */
    public function show($unit = null)
    {
        $command = ['systemctl', 'show'];
        if ($unit !== null) {
            $command[] = $unit;
        }
        $command[] = '--no-pager';

        $processResult = $this->getCommandExecutor()->execute($command);

        if ($processResult->getExitCode() !== 0) {
            throw new SystemdFailedException($processResult);
        }

        $parsed = new KeyValueParser($processResult->getOutput());

        if ($unit !== null) {
            return new ShowUnitRow($parsed);
        }

        return new ShowRow($parsed);
    }

}