<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;
use Pupax\SystemdWrapper\CommandExecutor\SudoCommandExecutor;
use Pupax\SystemdWrapper\Commands\ListSocketsWrapper;
use Pupax\SystemdWrapper\Commands\ListTimersWrapper;
use Pupax\SystemdWrapper\Commands\ListUnitsWrapper;
use Pupax\SystemdWrapper\Commands\ShowWrapper;
use Pupax\SystemdWrapper\Commands\SimpleCommandWrapper;

class SystemdWrapper
{
    private $commandExecutor;

    /**
     * SystemdWrapper constructor.
     * Pass a CommandExecutorInterface to override default local command executor
     *
     * @param CommandExecutorInterface|null $commandExecutor
     */
    public function __construct(CommandExecutorInterface $commandExecutor = null)
    {
        $this->commandExecutor = $commandExecutor;
        if ($this->commandExecutor === null) {
            $this->commandExecutor = new SudoCommandExecutor();
        }
    }

    /**
     * Run and parse output of systemctl list-units
     *
     * @return Models\ListSocketsRow[]
     * @throws Exception\SystemdFailedException
     */
    public function listSockets()
    {
        $wrapper = new ListSocketsWrapper($this->commandExecutor);
        return $wrapper->getSockets();
    }

    /**
     * Run and parse output of systemctl list-units
     *
     * @return Models\ListUnitsRow[]
     * @throws Exception\SystemdFailedException
     */
    public function listUnits()
    {
        $wrapper = new ListUnitsWrapper($this->commandExecutor);
        return $wrapper->getUnits();
    }

    /**
     * Run and parse output of systemctl list-timers
     *
     * @return Models\ListTimersRow[]
     * @throws Exception\SystemdFailedException
     */
    public function listTimers()
    {
        $wrapper = new ListTimersWrapper($this->commandExecutor);
        return $wrapper->getTimers();
    }

    /**
     * Run and parse output of systemctl show [unit]
     *
     * @param null $unit
     * @return Models\ShowRow|Models\ShowUnitRow
     * @throws Exception\SystemdFailedException
     */
    public function show($unit = null)
    {
        $wrapper = new ShowWrapper($this->commandExecutor);
        return $wrapper->show($unit);
    }

    /**
     * Run systemctl start $unit
     *
     * @param string $unit
     * @return CommandExecutor\CommandResult
     */
    public function start(string $unit)
    {
        $wrapper = new SimpleCommandWrapper($this->commandExecutor, 'start');
        return $wrapper->execute([$unit]);
    }

    /**
     * Run systemctl stop $unit
     *
     * @param string $unit
     * @return CommandExecutor\CommandResult
     */
    public function stop(string $unit)
    {
        $wrapper = new SimpleCommandWrapper($this->commandExecutor, 'stop');
        return $wrapper->execute([$unit]);
    }


    /**
     * Run systemctl restart $unit
     *
     * @param string $unit
     * @return CommandExecutor\CommandResult
     */
    public function restart(string $unit)
    {
        $wrapper = new SimpleCommandWrapper($this->commandExecutor, 'restart');
        return $wrapper->execute([$unit]);
    }

    /**
     * Run systemctl reload $unit
     *
     * @param string $unit
     * @return CommandExecutor\CommandResult
     */
    public function reload(string $unit)
    {
        $wrapper = new SimpleCommandWrapper($this->commandExecutor, 'reload');
        return $wrapper->execute([$unit]);
    }
}
