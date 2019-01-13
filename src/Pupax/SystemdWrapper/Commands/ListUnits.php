<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:41
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;
use Pupax\SystemdWrapper\Models\ListUnitsRow;
use Pupax\SystemdWrapper\Timer;
use Pupax\SystemdWrapper\Utils\TableParser;

class ListUnits
{

    private $commandExecutor;

    public function __construct(CommandExecutorInterface $commandExecutor)
    {
        $this->commandExecutor = $commandExecutor;
    }

    public function getUnits()
    {
        $output = $this->commandExecutor->execute(['systemctl', 'list-units', '--all', '--no-pager']);

        $table = new TableParser($output->getOutput());
        return array_map(function ($row) {
            return new ListUnitsRow($row['unit'], $row['load'], $row['active'], $row['sub'], $row['description']);
        }, $table->getRowsAssoc());
    }

}