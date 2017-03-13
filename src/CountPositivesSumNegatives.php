<?php

namespace ReenExe\CodewarsPHP;

class CountPositivesSumNegatives
{
    public function sum(array $numbers)
    {
        $positive = 0;
        $negative = 0;

        foreach ($numbers as $number) {
            if ($number > 0) {
                ++$positive;
            } else {
                $negative += $number;
            }
        }

        return [$positive, $negative];
    }
}
