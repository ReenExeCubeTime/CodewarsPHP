<?php

namespace ReenExe\CodewarsPHP;

class IPValidator
{
    public function valid(string $ip): bool
    {
        return (bool)filter_var($ip, \FILTER_VALIDATE_IP);
    }
}
