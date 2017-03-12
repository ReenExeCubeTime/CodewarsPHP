<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\EvenOrOdd;

class Test extends TestCase
{
    public function testExamples()
    {
        $evenOrOdd = new EvenOrOdd();
        $this->assertEquals('Even', $evenOrOdd->solve(2));
        $this->assertEquals('Even', $evenOrOdd->solve(0));
        $this->assertEquals('Odd', $evenOrOdd->solve(7));
        $this->assertEquals('Odd', $evenOrOdd->solve(1));
    }
}
