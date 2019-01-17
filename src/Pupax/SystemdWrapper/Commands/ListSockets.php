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
use Pupax\SystemdWrapper\Models\ListSocketsRow;
use Pupax\SystemdWrapper\Models\ListTimersRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListSockets extends AbstractCommand
{

    /**
     * @return ListSocketsRow[]
     * @throws SystemdFailedException
     */
    public function getSockets()
    {
        $processResult = $this->getCommandExecutor()->execute(['systemctl', 'list-sockets', '--all', '--no-pager']);

        if ($processResult->getExitCode() !== 0) {
            throw new SystemdFailedException($processResult);
        }

        $table = new TableParser($processResult->getOutput());
        return array_map(function ($row) {
            return new ListSocketsRow($row['listen'], $row['unit'], $row['activates']);
        }, $table->getRowsAssoc());
    }

}