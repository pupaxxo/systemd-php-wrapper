<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 21:18
 */

namespace Pupax\SystemdWrapper\Exception;


use Pupax\SystemdWrapper\CommandExecutor\CommandResult;

class SystemdFailedException extends \Exception
{

    /** @var CommandResult */
    private $commandResult;

    /**
     * SystemdFailedException constructor.
     * @param CommandResult $commandResult
     */
    public function __construct(CommandResult $commandResult)
    {
        parent::__construct(sprintf('%s exited with %d: %s',
            $commandResult->getCommand(),
            $commandResult->getExitCode(),
            $commandResult->getErrorOutput()));
        $this->commandResult = $commandResult;
    }

    /**
     * @return CommandResult
     */
    public function getCommandResult(): CommandResult
    {
        return $this->commandResult;
    }

}