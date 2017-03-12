<?php

namespace ReenExe\CodewarsPHP\Tests;

use PHPUnit\Framework\TestCase;
use ReenExe\CodewarsPHP\LongestUniqueLetter;

class LongestUniqueLetterTest extends TestCase
{
    public function testBasics()
    {
        $longest = new LongestUniqueLetter();
        $this->assertSame($longest->merge('aretheyhere', 'yestheyarehere'), 'aehrsty');
        $this->assertSame($longest->merge('loopingisfunbutdangerous', 'lessdangerousthancoding'), 'abcdefghilnoprstu');
        $this->assertSame($longest->merge('inmanylanguages', 'theresapairoffunctions'), 'acefghilmnoprstuy');
        $this->assertSame($longest->merge('lordsofthefallen', 'gamekult'), 'adefghklmnorstu');
    }
}
