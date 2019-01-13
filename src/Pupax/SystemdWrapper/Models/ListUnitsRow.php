<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 19:11
 */

namespace Pupax\SystemdWrapper\Models;


class ListUnitsRow
{

    /* Load status */
    const LOADED = 'loaded';
    const NOT_FOUND = 'not-found';
    /* Active status */
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    /* Sub status */
    const DEAD = 'dead';
    const RUNNING = 'running';
    const LISTENING = 'listening';
    const EXITED = 'exited';
    const MOUNTED = 'mounted';
    const PLUGGED = 'plugged';

    private $unit;
    private $load;
    private $active;
    private $sub;
    private $description;

    /**
     * ListUnitRow constructor.
     * @param $unit
     * @param $load
     * @param $active
     * @param $sub
     * @param $description
     */
    public function __construct($unit, $load, $active, $sub, $description)
    {
        $this->unit = $unit;
        $this->load = $load;
        $this->active = $active;
        $this->sub = $sub;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return mixed
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return mixed
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}