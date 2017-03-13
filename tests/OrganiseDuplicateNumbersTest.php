<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class OrganiseDuplicateNumbersTest extends TestCases
{
    /**
     * Check properties of return value.
     */
    public function testPropertiesOfResult() {
        // Should be defined.
        $this->assertNotNull(group(array(3, 2, 6, 2)), "Return value should not be null.");

        // Should be an array.
        $this->assertTrue(is_array(group(array(3, 2, 6, 2))), "Return value should be an array.");

        // Should have correct length.
        $this->assertEquals(
            sizeof(group(array(1, 2, 1, 6, 6))),
            sizeof(array_unique(array(1, 2, 1, 6, 6))),
            "Return value should have the correct number of elements."
        );
    }

    /**
     * Make sure the group function returns the expected result.
     *
     * @dataProvider provideTestData
     */
    public function testGroup($expected, $input) {
        $this->assertEquals($expected, group($input));
    }

    public function provideTestData() {
        return array(
            'Simple 1' => array(
                [[3, 3], [2, 2], [6], [1]],
                [3, 2, 6, 2, 1, 3]
            ),
            'Simple 2' => array(
                [[3], [2, 2], [6]],
                [3, 2, 6, 2]
            )
        );
    }
}
