<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class PascalsTriangleTest extends TestCase
{
    public function testExamples()
    {
        $this->assertSame([1], pascals_triangle(1));
        $this->assertSame([1, 1, 1], pascals_triangle(2));
        $this->assertSame([1, 1, 1, 1, 2, 1], pascals_triangle(3));
        $this->assertSame([1, 1, 1, 1, 2, 1, 1, 3, 3, 1], pascals_triangle(4));
        $this->assertSame([1, 1, 1, 1, 2, 1, 1, 3, 3, 1, 1, 4, 6, 4, 1], pascals_triangle(5));
    }
}