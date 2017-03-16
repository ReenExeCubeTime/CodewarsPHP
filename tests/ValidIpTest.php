<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\IPValidator;

class ValidIpTest extends TestCase
{
    public function testValid()
    {
        $validator = new IPValidator();

        $valid = [
            '0.0.0.0',
            '255.255.255.255',
            '238.46.26.43',
            '0.34.82.53',
        ];

        foreach ($valid as $input) {
            $this->assertTrue($validator->valid($input));
        }

        $invalid = [
            '',
            'abc.def.ghi.jkl',
            '123.456.789.0',
            ' 1.2.3.4',
        ];

        foreach ($invalid as $input) {
            $this->assertFalse($validator->valid($input));
        }
    }
}
