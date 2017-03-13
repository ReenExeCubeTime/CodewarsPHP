<?php

namespace ReenExe\CodewarsPHP;

class FindMissingLetter
{
    public function find(array $letters)
    {
        $range = range(current($letters), end($letters));

        $diff = array_diff($range, $letters);

        return current($diff);
    }
}
