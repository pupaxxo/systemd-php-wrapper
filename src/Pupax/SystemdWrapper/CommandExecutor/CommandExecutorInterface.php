<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\CommandExecutor;

interface CommandExecutorInterface
{
    /**
     * Execute specified command as root.
     *
     * @param array $command
     *
     * @return CommandResult
     */
    public function executeAsRoot(array $command): CommandResult;

    /**
     * Execute specified command.
     *
     * @param array $command
     *
     * @return CommandResult
     */
    public function execute(array $command): CommandResult;
}
