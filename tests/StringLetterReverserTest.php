<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class StringLetterReverserTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals('A nuf elttil egnellahc', reverser('A fun little challenge'));
    }
}
