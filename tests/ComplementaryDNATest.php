<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class ComplementaryDNATest extends TestCase
{
    public function testExamples()
    {
        $this->assertEquals('TTTT', DNA_strand('AAAA'));
        $this->assertEquals('AAAA', DNA_strand('TTTT'));
        $this->assertEquals('TAACG', DNA_strand('ATTGC'));
        $this->assertEquals('ATTGC', DNA_strand('TAACG'));
        $this->assertEquals('CATA', DNA_strand('GTAT'));
        $this->assertEquals('GTAT', DNA_strand('CATA'));
    }
}