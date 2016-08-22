<?php

class EasySVGUTF8ToUnicodeTest extends \PHPUnit_Framework_TestCase {
    protected $svg;
    protected $reflection;

    protected function setUp() {
        $this->svg = new EasySVG;
        $this->reflection = new \ReflectionClass(get_class($this->svg));
    }

    protected function runUTF8Method($string) {
        $method = $this->reflection->getMethod('_utf8ToUnicode');
        $method->setAccessible(true);
        return $method->invokeArgs($this->svg, array($string));
    }

    public function testStandardCharacters() {
        $result = $this->runUTF8Method('omg lol');
        $this->assertEquals(array(
            111,109,103,32,108,111,108
        ), $result);
    }

    public function testStrangeASCII() {
        $result = $this->runUTF8Method('ümlaut eñye');
        $this->assertEquals(array(
            252,109,108,97,117,116,32,101,241,121,101
        ), $result);
    }

    public function testLigatures() {
        $result = $this->runUTF8Method('ff fb fj fi fj fk fl ffb ffj ffi ffj ffk ffl fff');
        $this->assertEquals(array(
            64256,32,
            64261,32,
            64263,32,
            64257,32,
            64263,32,
            64264,32,
            64258,32,
            64265,32,
            64267,32,
            64259,32,
            64267,32,
            64268,32,
            64260,32,
            64256,102
        ), $result);
    }
}

