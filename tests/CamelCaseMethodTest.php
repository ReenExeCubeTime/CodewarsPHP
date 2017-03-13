<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class CamelCaseMethodTest extends TestCase
{
    public function testFixed()
    {
        $this->assertEquals('TestCase', camel_case('test case'));
        $this->assertEquals('CamelCaseMethod', camel_case('camel case method'));
        $this->assertEquals('SayHello', camel_case('say hello '));
        $this->assertEquals('CamelCaseWord', camel_case(' camel case word'));
        $this->assertEquals('', camel_case(''));
    }
}