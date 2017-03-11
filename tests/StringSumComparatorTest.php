<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\StringSumComparator;

class StringSumComparatorTest extends TestCase
{
    public function testExample()
    {
        $comparator = new StringSumComparator();
        $this->assertSame(true, $comparator->compare('AD', 'BC'));
        $this->assertSame(true, $comparator->compare('abc', 'CBA'));
        $this->assertSame(true, $comparator->compare('ZzZz', 'ffPFF'));
        $this->assertSame(true, $comparator->compare('!!', '7476'));
    }
}
