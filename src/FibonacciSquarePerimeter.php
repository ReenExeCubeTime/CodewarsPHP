<?php

namespace ReenExe\CodewarsPHP;

class FibonacciSquarePerimeter
{
    public function calculate($n)
    {
        $sequence = [1, 1];

        for ($index = 0; $index < $n - 1; ++$index) {
            $values = array_slice($sequence, -2);

            $sequence[] = array_sum($values);
        }

        return array_sum($sequence) * 4;
    }
}
