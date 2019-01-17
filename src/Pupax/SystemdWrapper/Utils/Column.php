<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Utils;

class Column
{
    private $name;
    private $startIndex;
    private $endIndex;

    /**
     * Column constructor.
     *
     * @param $name
     * @param $startIndex
     * @param $endIndex
     */
    public function __construct(string $name, int $startIndex, int $endIndex)
    {
        $this->name = $name;
        $this->startIndex = $startIndex;
        $this->endIndex = $endIndex;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStartIndex(): int
    {
        return $this->startIndex;
    }

    /**
     * @return int
     */
    public function getEndIndex(): int
    {
        return $this->endIndex;
    }
}
