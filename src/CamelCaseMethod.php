<?php

namespace ReenExe\CodewarsPHP;

class CamelCaseMethod
{
    public function convert(string $string): string
    {
        $words = explode(' ', $string);
        $upper = array_map('ucfirst', $words);
        return implode('', $upper);
    }
}
