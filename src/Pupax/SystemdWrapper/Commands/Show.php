<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 20:42
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\Models\ShowRow;
use Pupax\SystemdWrapper\Models\ShowUnitRow;
use Pupax\SystemdWrapper\Utils\KeyValueParser;

class Show extends AbstractCommand
{

    /**
     * @param null|string $unit
     * @return ShowRow|ShowUnitRow
     */
    public function show($unit = null)
    {
        $command = ['systemctl', 'show'];
        if ($unit !== null) {
            $command[] = $unit;
        }
        $command[] = '--no-pager';

        $processResult = $this->getCommandExecutor()->execute($command);
        $parsed = new KeyValueParser($processResult->getOutput());

        if ($unit !== null) {
            return new ShowUnitRow($parsed);
        }

        return new ShowRow($parsed);
    }

}