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
        $sum = 0;

        $from = ord('A');
        $to = ord('Z');

        foreach (str_split(strtoupper($string)) as $letter) {
            $ord = ord($letter);

            if ($ord < $from || $ord > $to) {
                return 0;
            }

            $sum += $ord;
        }

        return $sum;
    }
}
