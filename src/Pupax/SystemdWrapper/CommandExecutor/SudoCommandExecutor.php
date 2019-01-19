<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\CommandExecutor;

use Symfony\Component\Process\Process;

class SudoCommandExecutor implements CommandExecutorInterface
{

    /**
     * Execute specified command as root.
     *
     * @param array $command
     *
     * @return CommandResult
     */
    public function executeAsRoot(array $command): CommandResult
    {
        return $this->execute(array_merge(['sudo'], $command));
    }

    /**
     * Execute specified command.
     *
     * @param array $command
     *
     * @return CommandResult
     */
    public function execute(array $command): CommandResult
    {
        $process = new Process($command);
        $process->run();
        return new CommandResult($process->getCommandLine(), $process->getExitCode(), $process->getOutput(), $process->getErrorOutput());
    }

    /**
     * Get systemctl binary path
     * @return string
     */
    public function getSystemCtlBinary(): string
    {
        return 'systemctl';
    }
}
