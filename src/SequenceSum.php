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
        if ($count > 0) {
            $range = range(0, $count);

            $sum = (1 + $count) * $count / 2;

            return implode('+', $range) . ' = ' . $sum;
        }

        if ($count === 0) {
            return '0=0';
        }

        return "$count<0";
    }
}
