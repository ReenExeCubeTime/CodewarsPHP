<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\GoingFactorialSequence;

class GoingFactorialSequenceTest extends TestCase
{
    public function testBasics()
    {
        $going = new GoingFactorialSequence();
        $this->assertEquals(1.275, $going->calculate(5));
        $this->assertEquals(1.2125, $going->calculate(6));
        $this->assertEquals(1.173214, $going->calculate(7));
        $this->assertEquals(1.146651, $going->calculate(8));
    }
}
