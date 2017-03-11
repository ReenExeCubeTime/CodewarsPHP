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

    private function sum($source)
    {
        $sum = 0;

        $from = ord('A');
        $to = ord('Z');

        $length = strlen($source);
        $string = strtoupper($source);

        for ($index = 0; $index < $length; ++$index) {
            $ord = ord($string[$index]);

            if ($ord < $from || $ord > $to) {
                return 0;
            }

            $sum += $ord;
        }

        return $sum;
    }
}
