<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:41
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;
use Pupax\SystemdWrapper\Exception\SystemdFailedException;
use Pupax\SystemdWrapper\Models\ListUnitsRow;
use Pupax\SystemdWrapper\Timer;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListUnits extends AbstractCommand
{

    /**
     * @return ListUnitsRow[]
     * @throws SystemdFailedException
     */
    public function getUnits()
    {
        $processResult = $this->getCommandExecutor()->execute(['systemctl', 'list-units', '--all', '--no-pager']);

        if ($processResult->getExitCode() !== 0) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());
        return array_map(function ($row) {
            return new ListUnitsRow($row['unit'], $row['load'], $row['active'], $row['sub'], $row['description']);
        }, $table->getRowsAssoc());
    }

}