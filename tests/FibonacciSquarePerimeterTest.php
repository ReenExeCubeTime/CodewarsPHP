<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\FibonacciSquarePerimeter;

class FibonacciSquarePerimeterTest extends TestCase
{
    public function testBasics()
    {
        $perimeter = new FibonacciSquarePerimeter();
        $this->assertSame($perimeter->calculate(5), 80);
        $this->assertSame($perimeter->calculate(7), 216);
        $this->assertSame($perimeter->calculate(70), 3226062132197568);
    }
}
