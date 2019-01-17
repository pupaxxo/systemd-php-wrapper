<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 20:44
 */

namespace Pupax\SystemdWrapper\Utils;


class KeyValueParser
{

    private $store;

    public function __construct(string $raw)
    {
        foreach (explode("\n", $raw) as $line) {
            if (empty($line)) continue;
            list ($key, $value) = array_map('trim', explode('=', $line, 2));
            $this->store[$key] = $value;
        }
    }

    public function get(string $key, $default = null)
    {
        if (!isset($this->store[$key])) {
            return $default;
        }
        return $this->store[$key];
    }

    public function getKeys()
    {
        return array_keys($this->store);
    }

    public function getValues()
    {
        return array_values($this->store);
    }

    public function getData()
    {
        return $this->store;
    }
}