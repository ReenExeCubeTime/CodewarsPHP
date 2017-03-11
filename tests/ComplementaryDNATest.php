<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\ComplementaryDNA;

class ComplementaryDNATest extends TestCase
{
    public function testExamples()
    {
        $complementary = new ComplementaryDNA();
        $this->assertEquals('TTTT', $complementary->strand('AAAA'));
        $this->assertEquals('AAAA', $complementary->strand('TTTT'));
        $this->assertEquals('TAACG', $complementary->strand('ATTGC'));
        $this->assertEquals('ATTGC', $complementary->strand('TAACG'));
        $this->assertEquals('CATA', $complementary->strand('GTAT'));
        $this->assertEquals('GTAT', $complementary->strand('CATA'));
    }
}