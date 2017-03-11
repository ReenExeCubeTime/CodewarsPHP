<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\StringLetterReverser;

class StringLetterReverserTest extends TestCase
{
    public function testExample()
    {
        $reverser = new StringLetterReverser();

        $this->assertSame(
            'A nuf elttil egnellahc',
            $reverser->reverse('A fun little challenge')
        );
    }
}
