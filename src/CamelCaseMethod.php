<?php

namespace ReenExe\CodewarsPHP;

class CamelCaseMethod
{
    public function convert(string $string): string
    {
        return str_replace(' ', '', ucwords($string));
    }
}
