<?php

namespace ReenExe\CodewarsPHP;

class LongestUniqueLetter
{
    public function merge($a, $b)
    {
        $string = $a . $b;

        $letters = array_unique(str_split($string));

        sort($letters);

        return implode('', $letters);
    }
}
