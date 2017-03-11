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
        $this->assertSame('-15<0', $sum->show(-15));
        $this->assertSame('0=0', $sum->show(0));
    }
}
