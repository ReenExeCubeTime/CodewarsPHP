<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\ScalingSquaredString;

class ScalingSquaredStringTest extends TestCase
{
    public function testScalingBasics()
    {
        $scaling = new ScalingSquaredString();
        $a = "abcd\nefgh\nijkl\nmnop";
        $r = "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp";
        $this->assertSame($scaling->scale($a, 2, 3), $r);

        $this->assertSame($scaling->scale("CG\nla", 2, 3), "CCGG\nCCGG\nCCGG\nllaa\nllaa\nllaa");
    }
}