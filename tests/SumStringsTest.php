<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\SumStrings;

class SumStringsTest extends TestCase
{
    public function testExamples()
    {
        $summer = new SumStrings();
        $this->assertSame('579', $summer->sum('123', '456'));
        $this->assertSame('14579', $summer->sum('12123', '2456'));
        $this->assertSame(
            str_repeat('5', 100),
            $summer->sum(str_repeat('2', 100), str_repeat('3', 100))
        );
    }
}
