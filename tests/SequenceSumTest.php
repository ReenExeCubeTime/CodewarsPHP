<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\SequenceSum;

class SequenceSumTest extends TestCase
{
    public function testShowSequence()
    {
        $sum = new SequenceSum();

        $this->assertSame('0+1+2+3+4+5+6 = 21', $sum->show(6));
    }
}
