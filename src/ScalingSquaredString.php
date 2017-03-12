<?php

namespace ReenExe\CodewarsPHP;

class ScalingSquaredString
{
    public function scale($string, $x, $y)
    {
        if ($string === '') {
            return '';
        }

        $lines = explode(\PHP_EOL, $string);

        $result = [];

        foreach ($lines as $line) {
            $letterList = [];

            $length = strlen($line);

            for ($i = 0; $i < $length; ++$i) {
                $letterList[] = str_repeat($line[$i], $x);
            }

            $resultLine = implode('', $letterList);

            for ($i = 0; $i < $y; ++$i) {
                $result[] = $resultLine;
            }
        }

        return implode(\PHP_EOL, $result);
    }
}
