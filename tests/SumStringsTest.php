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
    }
}
