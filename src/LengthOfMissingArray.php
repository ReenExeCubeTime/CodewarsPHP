<?php

namespace ReenExe\CodewarsPHP;

class LengthOfMissingArray
{
    public function find(array $arrayOfArrays)
    {
        if (empty($arrayOfArrays)) {
            return 0;
        }

        $counts = array_map('count', $arrayOfArrays);

        $range = range(min($counts), max($counts));

        return current(array_diff($range, $counts));
    }
}
