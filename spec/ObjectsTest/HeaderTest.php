<?php


use Source\Objects\Header;
use PHPUnit\Framework\TestCase;

class HeaderTest extends TestCase
{
    private $Header;

    public function setUp()
    {
        $this->Header = new Source\Objects\Header("testImage", "testText", "testDescription");
    }

    public function testCanBeCreatedFromValidHeader()
    {
        $this->assertInstanceOf(Source\Objects\Header::class, $this->Header, "Header is an instance of an Header class");
    }

    public function testCanRetrieveHeaderName()
    {
        $this->assertEquals("testImage",$this->Header->getImage(), "Could not retrieve Name");
    }

    public function testCanRetrieveHeaderText()
    {
        $this->assertEquals("testText",$this->Header->getText(), "Could not retrieve Text");
    }

    public function testCanRetrieveHeaderDescription()
    {
        $this->assertEquals("testDescription",$this->Header->getDescription(), "Could not retrieve Description");
    }

    public function tearDown()
    {
        $this->Header = null;
    }
}
