<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class RomanNumeralsEncoderTest extends TestCase
{
    public function test_static_operations()
    {
        $this->assertEquals("M", solution(1000));
        $this->assertEquals("IV", solution(4));
        $this->assertEquals("I", solution(1));
        $this->assertEquals("MCMXC", solution(1990));
        $this->assertEquals("MMVIII", solution(2008));
    }
}
