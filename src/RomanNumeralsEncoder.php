<?php

namespace ReenExe\CodewarsPHP;

class RomanNumeralsEncoder
{
    public function encode($from)
    {
        $map = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];

        $list = [];

        foreach ($map as $number => $value) {
            $multi = (int)($from / $number);
            if ($multi) {
                $list[] = str_repeat($value, $multi);

                $from %= $number;
            }
        }

        return implode('', $list);
    }
}
