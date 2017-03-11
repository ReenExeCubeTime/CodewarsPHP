<?php

namespace ReenExe\CodewarsPHP;

class StringLetterReverser
{
    /**
     * @param $string
     * @return string
     */
    public function reverse($string)
    {
        $parts = explode(' ', $string);

        $reversed = array_map('strrev', $parts);

        return implode(' ', $reversed);
    }
}
