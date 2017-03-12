<?php

namespace ReenExe\CodewarsPHP;

class FibonacciSequence
{
    public function calculate(array $signature, $n)
    {
        $step = count($signature);

        if ($n <= $step) {
            return array_slice($signature, 0, $n);
        }

        $rest = $n - $step;

        for ($index = 0; $index < $rest; ++$index) {
            $values = array_slice($signature, -$step);

            $signature[] = array_sum($values);
        }

        return $signature;
    }
}
