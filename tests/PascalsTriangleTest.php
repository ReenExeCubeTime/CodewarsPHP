<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\PascalsTriangle;

class PascalsTriangleTest extends TestCase
{
    public function testExamples()
    {
        $triangle = new PascalsTriangle();
        $this->assertSame([1], $triangle->calculate(1));
        $this->assertSame([1, 1, 1], $triangle->calculate(2));
        $this->assertSame([1, 1, 1, 1, 2, 1], $triangle->calculate(3));
        $this->assertSame([1, 1, 1, 1, 2, 1, 1, 3, 3, 1], $triangle->calculate(4));
        $this->assertSame([1, 1, 1, 1, 2, 1, 1, 3, 3, 1, 1, 4, 6, 4, 1], $triangle->calculate(5));
    }
}