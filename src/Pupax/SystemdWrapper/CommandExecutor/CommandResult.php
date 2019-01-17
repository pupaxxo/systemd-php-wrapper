<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\CommandExecutor;

class CommandResult
{
    private $exitCode;
    private $output;
    private $errorOutput;
    private $command;

    /**
     * CommandResult constructor.
     *
     * @param $command
     * @param $exitCode
     * @param $output
     * @param $errorOutput
     */
    public function __construct(string $command, int $exitCode, string $output, string $errorOutput)
    {
        $this->command = $command;
        $this->exitCode = $exitCode;
        $this->output = $output;
        $this->errorOutput = $errorOutput;
    }

    /**
     * Get execute command exit code.
     *
     * @return int
     */
    public function getExitCode(): int
    {
        return $this->exitCode;
    }

    /**
     * Get standard output of the executed command.
     *
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * Get error output of the executed command.
     *
     * @return string
     */
    public function getErrorOutput(): string
    {
        return $this->errorOutput;
    }

    /**
     * Get executed command.
     *
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}
