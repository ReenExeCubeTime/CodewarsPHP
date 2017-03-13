<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\OrganiseDuplicateNumbers;

class OrganiseDuplicateNumbersTest extends TestCase
{
    /**
     * @dataProvider provideTestData
     */
    public function testGroup(array $expected, array $input)
    {
        $organise = new OrganiseDuplicateNumbers();
        $this->assertSame($expected, $organise->group($input));
    }

    public function provideTestData()
    {
        return [
            [
                [[3, 3], [2, 2], [6], [1]],
                [3, 2, 6, 2, 1, 3]
            ],
            [
                [[3], [2, 2], [6]],
                [3, 2, 6, 2]
            ]
        ];
    }
}
