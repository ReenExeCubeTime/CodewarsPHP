<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\CountBit;

class CountBitsTest extends TestCase
{
    public function testResultCountBits()
    {
        $countBit = new CountBit();
        $this->assertSame($countBit->calculate(0), 0);
        $this->assertSame($countBit->calculate(4), 1);
        $this->assertSame($countBit->calculate(7), 3);
        $this->assertSame($countBit->calculate(9), 2);
        $this->assertSame($countBit->calculate(10), 2);
    }
}