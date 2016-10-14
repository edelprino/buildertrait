<?php

class BuilderTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateVirtualWithMethod()
    {
        $builder = new TestBuilder();
        $obj = $builder->withTest('test_value')->build();

        $this->assertEquals($obj->test, 'test_value');
    }

    public function testCreateVirtualWithMethodWithCamelCaseProperty()
    {
        $builder = new TestBuilder();
        $obj = $builder->withTestCamelCase('test_value')->build();

        $this->assertEquals($obj->testCamelCase, 'test_value');
    }

    /**
     * @expectedException \BuilderTraitException
     */
    public function testExceptionOnNotPresentProperty()
    {
        $builder = new TestBuilder();
        $builder->withNotExistentProperty();
    }
}

class TestBuilder
{
    use BuilderTrait;

    private $test;
    private $testCamelCase;

    public function build()
    {
        $obj = new TestClass();
        $obj->test = $this->test;
        $obj->testCamelCase = $this->testCamelCase;
        return $obj;
    }
}

class TestClass
{
    public $test;
    public $testCamelCase;
}
