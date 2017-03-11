<?php

namespace ReenExe\CodewarsPHP;

class SequenceSum
{
    /**
     * @param $count
     * @return string
     */
    public function show($count)
    {
        $range = range(0, $count);

        return implode('+', $range) . ' = ' . array_sum($range);
    }
}
