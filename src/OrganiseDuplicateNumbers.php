<?php

namespace ReenExe\CodewarsPHP;

class OrganiseDuplicateNumbers
{
    public function group(array $numbers)
    {
        $map = array_fill_keys($numbers, []);

        foreach ($numbers as $number) {
            $map[$number][] = $number;
        }

        return array_values($map);
    }
}
