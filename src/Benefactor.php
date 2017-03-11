<?php

namespace ReenExe\CodewarsPHP;

use InvalidArgumentException;

class Benefactor
{
    public function average(array $array, $need)
    {
        $sum = array_sum($array);
        $will = (count($array) + 1) * $need;

        if ($sum > $will) {
            throw new InvalidArgumentException();
        }

        return $will - $sum;
    }
}
