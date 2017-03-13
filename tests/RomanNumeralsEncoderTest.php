<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\RomanNumeralsEncoder;

class RomanNumeralsEncoderTest extends TestCase
{
    public function test_static_operations()
    {
        $encoder = new RomanNumeralsEncoder();
        $this->assertEquals('M', $encoder->encode(1000));
        $this->assertEquals('IV', $encoder->encode(4));
        $this->assertEquals('I', $encoder->encode(1));
        $this->assertEquals('MCMXC', $encoder->encode(1990));
        $this->assertEquals('MMVIII', $encoder->encode(2008));
    }
}
