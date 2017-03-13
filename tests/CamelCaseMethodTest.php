<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\CamelCaseMethod;

class CamelCaseMethodTest extends TestCase
{
    public function testFixed()
    {
        $converter = new CamelCaseMethod();
        $this->assertEquals('TestCase', $converter->convert('test case'));
        $this->assertEquals('CamelCaseMethod', $converter->convert('camel case method'));
        $this->assertEquals('SayHello', $converter->convert('say hello '));
        $this->assertEquals('CamelCaseWord', $converter->convert(' camel case word'));
        $this->assertEquals('', $converter->convert(''));
    }
}