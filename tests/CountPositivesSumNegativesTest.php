<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\CountPositivesSumNegatives;

class CountPositivesSumNegativesTest extends TestCase
{
    public function testExample()
    {
        $summer = new CountPositivesSumNegatives();
        $this->assertSame([10, -65], $summer->sum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
        $this->assertSame([8, -50], $summer->sum([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]));
    }
}
