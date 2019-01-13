<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:41
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;
use Pupax\SystemdWrapper\Models\ListTimersRow;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListTimers
{

    private $commandExecutor;

    public function __construct(CommandExecutorInterface $commandExecutor)
    {
        $this->commandExecutor = $commandExecutor;
    }

    public function getTimers()
    {
        $output = $this->commandExecutor->execute(['systemctl', 'list-timers', '--all', '--no-pager']);

        $table = new TableParser($output->getOutput());
        return array_map(function ($row) {
            return new ListTimersRow($row['next'], $row['left'], $row['last'], $row['passed'], $row['unit'], $row['activates']);
        }, $table->getRowsAssoc());
    }

}