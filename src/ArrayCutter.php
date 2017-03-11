<?php

namespace ReenExe\CodewarsPHP;

class ArrayCutter
{
    public function cut(array $input, $size)
    {
        return array_chunk($input, $size);
    }
}