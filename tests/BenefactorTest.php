<?php

namespace ReenExe\CodewarsPHP\Tests;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class BenefactorTest extends TestCase
{
    public function testRainfallBasics() {
        $this->assertSame(newAvg([14, 30, 5, 7, 9, 11, 15], 92), 645);
        $this->assertSame(newAvg([14, 30, 5, 7, 9, 11, 16], 90), 628);
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException() {
        $test = newAvg([14, 30, 5, 7, 9, 11, 15], 2);
    }
}
