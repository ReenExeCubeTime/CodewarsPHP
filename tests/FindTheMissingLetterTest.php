<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class FindTheMissingLetterTest extends TestCase
{
    public function testDescriptionExamples()
    {
        $this->assertSame('e', find_missing_letter(['a', 'b', 'c', 'd', 'f']));
        $this->assertSame('P', find_missing_letter(['O', 'Q', 'R', 'S']));
    }
}
