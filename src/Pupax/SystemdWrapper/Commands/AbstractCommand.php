<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 20:42
 */

namespace Pupax\SystemdWrapper\Commands;


use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;

abstract class AbstractCommand
{

    private $commandExecutor;

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