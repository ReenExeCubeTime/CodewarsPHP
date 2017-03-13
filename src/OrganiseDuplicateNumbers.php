<?php

namespace ReenExe\CodewarsPHP;

class OrganiseDuplicateNumbers
{
    public function group(array $numbers)
    {
        $map = array_fill_keys($numbers, 0);

        foreach ($numbers as $number) {
            $map[$number] += 1;
        }

        $result = [];
        foreach ($map as $number => $count) {
            $result[] = array_fill(0, $count, $number);
        }

        return $result;
    }
}
