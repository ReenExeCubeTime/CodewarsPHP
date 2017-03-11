<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\ArrayCutter;

class ArrayCutterTest extends TestCase
{
    public function testThatSomethingShouldHappen() {
        $cutter = new ArrayCutter();
        $this->assertSame([[1,2],[3,4],[5]], $cutter->cut([1,2,3,4,5], 2));
        $this->assertSame([[1],[2],[3]], $cutter->cut([1,2,3], 1));
        $this->assertSame([[1,2,3,4,5]], $cutter->cut([1,2,3,4,5], 10));
    }
}
