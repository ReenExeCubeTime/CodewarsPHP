<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class SumMixedTest extends TestCase
{
    public function testExamples()
    {
        $this->assertSame(22, sum_mix([9, 3, '7', '3']));
        $this->assertSame(42, sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7]));
        $this->assertSame(41, sum_mix(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']));
    }
}
