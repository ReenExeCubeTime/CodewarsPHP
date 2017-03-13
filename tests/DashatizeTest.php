<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\Dashatizer;

class DashatizeTest extends TestCase
{
    public function testBasic()
    {
        $dashatizer = new Dashatizer();
        $this->assertEquals('2-7-4', $dashatizer->dashatize(274));
        $this->assertEquals('5-3-1-1', $dashatizer->dashatize(5311));
        $this->assertEquals('86-3-20', $dashatizer->dashatize(86320));
        $this->assertEquals('9-7-4-3-02', $dashatizer->dashatize(974302));
    }
}
