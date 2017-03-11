<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\Benefactor;
use InvalidArgumentException;

class BenefactorTest extends TestCase
{
    public function testRainfallBasics()
    {
        $benefactor = new Benefactor();
        $this->assertSame(645, $benefactor->average([14, 30, 5, 7, 9, 11, 15], 92));
        $this->assertSame(628, $benefactor->average([14, 30, 5, 7, 9, 11, 16], 90));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $benefactor = new Benefactor();
        $benefactor->average([14, 30, 5, 7, 9, 11, 15], 2);
    }
}
