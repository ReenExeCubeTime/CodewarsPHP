<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class SumStringsTest extends TestCase
{
    public function testExamples()
    {
        $this->assertSame('579', sum_strings('123', '456'));
    }
}
