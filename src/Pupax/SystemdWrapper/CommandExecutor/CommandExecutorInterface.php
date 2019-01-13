<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:09
 */

namespace Pupax\SystemdWrapper\CommandExecutor;

interface CommandExecutorInterface
{

    /**
     * Execute specified command as root
     * @param array $command
     * @return CommandResult
     */
    public function executeAsRoot(array $command) : CommandResult;

    /**
     * Execute specified command
     * @param array $command
     * @return CommandResult
     */
    public function execute(array $command) : CommandResult;

}