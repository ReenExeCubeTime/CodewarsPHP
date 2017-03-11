<?php

namespace ReenExe\CodewarsPHP;

class CountBit
{
    /**
     * @param $number
     * @return int
     */
    public function calculate($number)
    {
        $result = 0;
        while ($number) {
            $result += $number % 2;
            $number = $number >> 1;
        }
        return $result;
    }
}
