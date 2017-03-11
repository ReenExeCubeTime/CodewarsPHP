<?php

namespace ReenExe\CodewarsPHP\Tests;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\Benefactor;

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
