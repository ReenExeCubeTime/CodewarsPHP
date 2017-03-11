<?php

namespace ReenExe\CodewarsPHP;

class ComplementaryDNA
{
    /**
     * @param string $dna
     * @return string
     */
    public function strand($dna)
    {
        $map = [
            'T' => 'A',
            'A' => 'T',
            'C' => 'G',
            'G' => 'C',
        ];

        return strtr($dna, $map);
    }
}
