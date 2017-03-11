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

        $sum = (1 + $count) * $count / 2;

        return implode('+', $range) . ' = ' . $sum;
    }
}
