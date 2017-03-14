<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class FibonacciSquarePerimeterTest extends TestCase
{
    public function testBasics()
    {
        $this->assertSame(perimeter(5), 80);
        $this->assertSame(perimeter(7), 216);
        $this->assertSame(perimeter(70), 3226062132197568);
    }
}
