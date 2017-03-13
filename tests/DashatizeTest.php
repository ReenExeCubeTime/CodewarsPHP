<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class DashatizeTest extends TestCase
{
    public function testBasic()
    {
        $this->assertEquals('2-7-4', dashatize(274));
        $this->assertEquals('5-3-1-1', dashatize(5311));
        $this->assertEquals('86-3-20', dashatize(86320));
        $this->assertEquals('9-7-4-3-02', dashatize(974302));
    }
}
