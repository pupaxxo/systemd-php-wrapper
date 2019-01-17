<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Models;

class ListSocketsRow
{
    private $listen;
    private $unit;
    private $activates;

    /**
     * ListSocketsRow constructor.
     *
     * @param $listen
     * @param $unit
     * @param $activates
     */
    public function __construct(string $listen, string $unit, string $activates)
    {
        $this->listen = $listen;
        $this->unit = $unit;
        $this->activates = $activates;
    }

    /**
     * @return string
     */
    public function getListen(): string
    {
        return $this->listen;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @return string
     */
    public function getActivates(): string
    {
        return $this->activates;
    }
}
