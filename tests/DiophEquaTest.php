<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class DiophEquaTest extends TestCase
{
    public function testBasics()
    {
        $this->assertSame(solequa(5), [[3, 1]]);
        $this->assertSame(solequa(9005), [[4503, 2251], [903, 449]]);
    }
}
