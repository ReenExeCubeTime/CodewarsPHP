<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\FindMissingLetter;

class FindTheMissingLetterTest extends TestCase
{
    public function testDescriptionExamples()
    {
        $finder = new FindMissingLetter();
        $this->assertSame('e', $finder->find(['a', 'b', 'c', 'd', 'f']));
        $this->assertSame('P', $finder->find(['O', 'Q', 'R', 'S']));
    }
}
