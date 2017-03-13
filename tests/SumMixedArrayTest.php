<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\SumMixedArray;

class SumMixedArrayTest extends TestCase
{
    public function testExamples()
    {
        $summer = new SumMixedArray();
        $this->assertSame(22, $summer->sum([9, 3, '7', '3']));
        $this->assertSame(42, $summer->sum(['5', '0', 9, 3, 2, 1, '9', 6, 7]));
        $this->assertSame(41, $summer->sum(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']));
    }
}
