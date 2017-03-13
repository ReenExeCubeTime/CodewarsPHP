<?php

namespace ReenExe\CodewarsPHP;

class Dashatizer
{
    public function dashatize(int $number): string
    {
        $digits = str_split($number);

        $result = [];

        foreach ($digits as $digit) {
            $result[] = $digit & 1 ? "-$digit-" : $digit;
        }

        return trim(str_replace('--', '-', implode('', $result)), '-');
    }
}
