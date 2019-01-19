<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Commands;

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;

class SimpleCommandWrapper extends AbstractCommandWrapper
{
    private $command;
    private $needRoot;

    public function __construct(CommandExecutorInterface $commandExecutor, string $command, bool $needRoot = false)
    {
        parent::__construct($commandExecutor);

        $this->command = $command;
        $this->needRoot = $needRoot;
    }

    /**
     * Execute simple command
     *
     * @param array $args
     * @return \Pupax\SystemdWrapper\CommandExecutor\CommandResult
     */
    public function execute(array $args = [])
    {
        if ($this->needRoot) {
            return $this->getCommandExecutor()->executeAsRoot(array_merge(
                [$this->getCommandExecutor()->getSystemCtlBinary(), $this->command],
                $args
            ));
        }
        return $this->getCommandExecutor()->execute(array_merge(
            [$this->getCommandExecutor()->getSystemCtlBinary(), $this->command],
            $args
        ));
    }
}
