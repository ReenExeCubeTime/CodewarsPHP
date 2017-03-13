<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\LengthOfMissingArray;

class LengthOfMissingArrayTest extends TestCase
{
    public function testBasicTests()
    {
        $finder = new LengthOfMissingArray();
        $this->assertSame($finder->find([[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]]), 3);
        $this->assertSame($finder->find([[5, 2, 9], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]]), 2);
        $this->assertSame($finder->find([[null], [null, null, null]]), 2);
        $this->assertSame($finder->find([['a', 'a', 'a'], ['a', 'a'], ['a', 'a', 'a', 'a'], ['a'], ['a', 'a', 'a', 'a', 'a', 'a']]), 5);
        $this->assertSame($finder->find([]), 0);
    }
}
