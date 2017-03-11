<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class ArrayCutterTest extends TestCase
{
    public function testThatSomethingShouldHappen() {
        $this->assertEquals([[1,2],[3,4],[5]], makeParts([1,2,3,4,5], 2));
        $this->assertEquals([[1],[2],[3]], makeParts([1,2,3], 1));
        $this->assertEquals([[1,2,3,4,5]], makeParts([1,2,3,4,5], 10));
    }
}
