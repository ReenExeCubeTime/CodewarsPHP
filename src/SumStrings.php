<?php

namespace ReenExe\CodewarsPHP;

class SumStrings
{
    public function sum($a, $b)
    {
        $max = max(strlen($a), strlen($b));

        $aFull = str_pad($a, $max, '0', STR_PAD_LEFT);
        $bFull = str_pad($b, $max, '0', STR_PAD_LEFT);

        $sequence = [];
        $accumulator = 0;
        for ($index = $max - 1; $index > -1; --$index) {
            $number = $aFull[$index] + $bFull[$index] + $accumulator;
            if ($number > 9) {
                $number -= 10;
                $accumulator = 1;
            } else {
                $accumulator = 0;
            }
            $sequence[] = $number;
        }

        $rest = implode('', array_reverse($sequence));

        return ltrim($accumulator ? $accumulator . $rest : $rest, '0');
    }
}
