<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class LengthOfMissingArrayTest extends TestCase
{
    public function testBasicTests()
    {
        $this->assertSame(getLengthOfMissingArray([[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]]), 3);
        $this->assertSame(getLengthOfMissingArray([[5, 2, 9], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]]), 2);
        $this->assertSame(getLengthOfMissingArray([[null], [null, null, null]]), 2);
        $this->assertSame(getLengthOfMissingArray([['a', 'a', 'a'], ['a', 'a'], ['a', 'a', 'a', 'a'], ['a'], ['a', 'a', 'a', 'a', 'a', 'a']]), 5);
        $this->assertSame(getLengthOfMissingArray([]), 0);
    }
}
