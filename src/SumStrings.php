<?php

namespace ReenExe\CodewarsPHP;

class SumStrings
{
    public function sum($a, $b)
    {
        $aLength = strlen($a);
        $bLength = strlen($b);
        $commonLength = min($aLength, $bLength);

        $common = substr($a, 0, -$commonLength)
                . substr($b, 0, -$commonLength);

        $aRest = substr($a, -$commonLength);
        $bRest = substr($b, -$commonLength);

        return $common . ($aRest + $bRest);
    }
}
