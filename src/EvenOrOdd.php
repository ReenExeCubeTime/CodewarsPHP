<?php

namespace ReenExe\CodewarsPHP;

class EvenOrOdd
{
    public function solve(int $n): string
    {
        return $n & 1 ? 'Odd' : 'Even';
    }
}
