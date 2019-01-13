<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:43
 */

require_once __DIR__ . '/TestCommandExecutor.php';

class ListUnitsTest extends \PHPUnit\Framework\TestCase
{

    public function testTimers()
    {
        $listTimers = new \Pupax\SystemdWrapper\Commands\ListUnits(new TestCommandExecutor());
        var_dump($listTimers->getUnits());
    }

}