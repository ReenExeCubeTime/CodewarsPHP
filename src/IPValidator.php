<?php

namespace ReenExe\CodewarsPHP;

class IPValidator
{
    public function valid($ip)
    {
        return (bool)filter_var($ip, \FILTER_VALIDATE_IP);
    }
}
