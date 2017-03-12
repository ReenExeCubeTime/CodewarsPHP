<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;

class LongestUniqueLetterTest extends TestCase
{
    public function testBasics()
    {
        $this->assertSame(longest('aretheyhere', 'yestheyarehere'), 'aehrsty');
        $this->assertSame(longest('loopingisfunbutdangerous', 'lessdangerousthancoding'), 'abcdefghilnoprstu');
        $this->assertSame(longest('inmanylanguages', 'theresapairoffunctions'), 'acefghilmnoprstuy');
        $this->assertSame(longest('lordsofthefallen', 'gamekult'), 'adefghklmnorstu');
    }
}
