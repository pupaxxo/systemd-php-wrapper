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
use Pupax\SystemdWrapper\Models\ListTimersRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListTimers extends AbstractCommand
{

    /**
     * @return ListTimersRow[]
     * @throws SystemdFailedException
     */
    public function getTimers()
    {
        $processResult = $this->getCommandExecutor()->execute(['systemctl', 'list-timers', '--all', '--no-pager']);

        if ($processResult->getExitCode() !== 0) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());
        return array_map(function ($row) {
            return new ListTimersRow($row['next'], $row['left'], $row['last'], $row['passed'], $row['unit'], $row['activates']);
        }, $table->getRowsAssoc());
    }

}