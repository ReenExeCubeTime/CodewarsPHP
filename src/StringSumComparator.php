<?php

namespace ReenExe\CodewarsPHP;

class StringSumComparator
{
    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function compare($a, $b)
    {
        return $this->sum($a) === $this->sum($b);
    }

    private function sum($string)
    {
        return array_sum(array_map('ord', str_split(strtoupper($string))));
    }
}
