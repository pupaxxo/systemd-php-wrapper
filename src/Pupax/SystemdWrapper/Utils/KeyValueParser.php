<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Utils;

class KeyValueParser
{
    /**
     * @var string[]
     */
    private $store;

    /**
     * KeyValueParser constructor.
     *
     * @param string $raw
     */
    public function __construct(string $raw)
    {
        foreach (explode("\n", $raw) as $line) {
            if (empty($line)) {
                continue;
            }
            list($key, $value) = array_map('trim', explode('=', $line, 2));
            $this->store[$key] = $value;
        }
    }

    /**
     * Get $key from data.
     *
     * @param string $key
     * @param null   $default
     *
     * @return string|null
     */
    public function get(string $key, $default = null)
    {
        if (!isset($this->store[$key])) {
            return $default;
        }

        return $this->store[$key];
    }

    /**
     * Get all keys.
     *
     * @return string[]
     */
    public function getKeys()
    {
        return array_keys($this->store);
    }

    /**
     * Get all values.
     *
     * @return string[]
     */
    public function getValues()
    {
        return array_values($this->store);
    }

    /**
     * Get alla values.
     *
     * @return string[]
     */
    public function getData()
    {
        return $this->store;
    }
}
