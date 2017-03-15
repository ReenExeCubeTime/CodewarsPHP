<?php

namespace ReenExe\CodewarsPHP;

class GoingFactorialSequence
{
    public function calculate($n)
    {
        $factorial = 1;
        $sum = $factorial;

        for ($i = 2; $i <= $n; ++$i) {
            $factorial *= $i;
            $sum += $factorial;
        }

        return floor($sum * 1e6 / $factorial) / 1e6;
    }
}
