<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Utils;

class TableParser
{
    /** @var Column[] */
    private $columns;
    /** @var string[][] */
    private $rows;

    public function __construct(string $raw)
    {
        $this->columns = [];
        $this->rows = [];

        $lines = explode("\n", $raw);

        $header = $lines[0];
        $name = '';
        $begin = 0;
        for ($i = 0; $i < \strlen($header); ++$i) {
            $char = $header[$i];
            $name .= $char;
            if ($i === \strlen($header) - 1 || (' ' === $char && ' ' !== $header[$i + 1])) {
                $this->columns[] = new Column(trim($name), $begin, $i === \strlen($header) - 1 ? max(array_map('strlen', $lines)) : $i);
                $name = '';
                $begin = $i + 1;
            }
        }

        foreach ($lines as $i => $line) {
            if (0 === $i) {
                continue;
            }
            if (empty($line)) {
                break;
            }
            $row = [];
            foreach ($this->columns as $column) {
                $row[] = trim(substr($line, $column->getStartIndex(), $column->getEndIndex() - $column->getStartIndex() + 1));
            }
            $this->rows[] = $row;
        }
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function getRowsAssoc()
    {
        return array_map(function ($line) {
            $assoc = [];
            foreach ($this->columns as $i => $column) {
                $assoc[mb_strtolower($column->getName())] = $line[$i];
            }

            return $assoc;
        }, $this->rows);
    }
}
