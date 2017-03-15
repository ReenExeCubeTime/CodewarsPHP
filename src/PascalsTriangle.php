<?php

namespace ReenExe\CodewarsPHP;

class PascalsTriangle
{
    public function calculate($n)
    {
        $step = [1];

        if ($n === 1) {
            return $step;
        }

        $result = [$step];

        for ($index = 2; $index <= $n; ++$index) {
            $left = $step;
            $right = $step;
            array_unshift($left, 0);
            array_push($right, 0);
            $step = $this->sum($left, $right);
            $result[] = $step;
        }

        return array_merge(...$result);
    }

    private function sum(array $a, array $b)
    {
        $count = count($a);

        $sum = [];

        for ($i = 0; $i < $count; ++$i) {
            $sum[] = $a[$i] + $b[$i];
        }

        return $sum;
    }
}
