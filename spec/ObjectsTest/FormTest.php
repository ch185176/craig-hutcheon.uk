<?php


use Source\Objects\Form;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
    private $Form;

    public function setUp()
    {
        $this->Form = new Source\Objects\Form("testName", "testEmail", "testQuery");
    }

    public function testCanBeCreatedFromValidForm()
    {
        $this->assertInstanceOf(Source\Objects\Form::class, $this->Form, "Article is an instance of an Form class");
    }

    public function testCanRetrieveFormName()
    {
        $this->assertEquals("testName",$this->Form->getName(), "Could not retrieve Name");
    }

    public function testCanRetrieveFormEmail()
    {
        $this->assertEquals("testEmail",$this->Form->getEmail(), "Could not retrieve Email");
    }

    public function testCanRetrieveFormQuery()
    {
        $this->assertEquals("testQuery",$this->Form->getQuery(), "Could not retrieve Query");
    }

    public function tearDown()
    {
        $this->Form = null;
    }
}
