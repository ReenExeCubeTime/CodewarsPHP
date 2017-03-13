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

        $from = min($counts);

        if ($from === 0) {
            return 0;
        }

        $range = range($from, max($counts));

        $missing = current(array_diff($range, $counts));

        $counts[] = $missing;

        sort($counts);

        return $range === $counts ? $missing : 0;
    }
}
