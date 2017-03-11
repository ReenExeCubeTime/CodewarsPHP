<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\ComplementaryDNA;

class ComplementaryDNATest extends TestCase
{
    public function testExamples()
    {
        $complementary = new ComplementaryDNA();
        $this->assertSame('TTTT', $complementary->strand('AAAA'));
        $this->assertSame('AAAA', $complementary->strand('TTTT'));
        $this->assertSame('TAACG', $complementary->strand('ATTGC'));
        $this->assertSame('ATTGC', $complementary->strand('TAACG'));
        $this->assertSame('CATA', $complementary->strand('GTAT'));
        $this->assertSame('GTAT', $complementary->strand('CATA'));
    }
}