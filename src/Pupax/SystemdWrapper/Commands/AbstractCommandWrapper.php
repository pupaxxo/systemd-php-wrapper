<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;

abstract class AbstractCommandWrapper
{
    /** @var CommandExecutorInterface */
    private $commandExecutor;

    /**
     * AbstractCommand constructor.
     *
     * @param CommandExecutorInterface $commandExecutor
     */
    public function __construct(CommandExecutorInterface $commandExecutor)
    {
        $this->commandExecutor = $commandExecutor;
    }

    /**
     * @return CommandExecutorInterface
     */
    public function getCommandExecutor(): CommandExecutorInterface
    {
        return $this->commandExecutor;
    }
}
