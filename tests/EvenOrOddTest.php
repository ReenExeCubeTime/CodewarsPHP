<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class EvenOrOddTest extends TestCase
{
    public function testExamples()
    {
        $this->assertEquals('Even', even_or_odd(2));
        $this->assertEquals('Even', even_or_odd(0));
        $this->assertEquals('Odd', even_or_odd(7));
        $this->assertEquals('Odd', even_or_odd(1));
    }
}
