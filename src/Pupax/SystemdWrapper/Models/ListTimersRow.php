<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:38
 */

namespace Pupax\SystemdWrapper\Models;


class ListTimersRow
{

    private $next;
    private $left;
    private $last;
    private $passed;
    private $unit;
    private $activates;

    /**
     * Timer constructor.
     * @param $next
     * @param $left
     * @param $last
     * @param $passed
     * @param $unit
     * @param $activates
     *
     * @throws \Exception
     */
    public function __construct(string $next, string $left, string $last, string $passed, string $unit, string $activates)
    {
        $this->next = new \DateTime($next);
        $this->left = $left;
        $this->last = new \DateTime($last);
        $this->passed = $passed;
        $this->unit = $unit;
        $this->activates = $activates;
    }

    /**
     * @return \DateTime
     */
    public function getNext(): \DateTime
    {
        return $this->next;
    }

    /**
     * @return string
     */
    public function getLeft(): string
    {
        return $this->left;
    }

    /**
     * @return \DateTime
     */
    public function getLast(): \DateTime
    {
        return $this->last;
    }

    /**
     * @return string
     */
    public function getPassed(): string
    {
        return $this->passed;
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