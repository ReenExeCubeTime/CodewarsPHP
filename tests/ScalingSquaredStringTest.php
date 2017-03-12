<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class ScalingSquaredStringTest extends TestCase
{
    public function testScalingBasics()
    {
        $a = "abcd\nefgh\nijkl\nmnop";
        $r = "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp";
        $this->assertSame(scale($a, 2, 3), $r);

        $this->assertSame(scale("CG\nla", 2, 3), "CCGG\nCCGG\nCCGG\nllaa\nllaa\nllaa");
    }
}