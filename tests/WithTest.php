<?php
namespace BuilderTrait;

class WithTest extends \PHPUnit_Framework_TestCase
{
    const ANY_VALUE = 'any value';

    public function testCreateVirtualWithMethod()
    {
        $builder = new ObjectWithTraitBuilder();

        $object = $builder
          ->withTest(ANY_VALUE)
          ->build();

        $this->assertEquals($object->test, ANY_VALUE);
    }

    public function testCreateVirtualWithMethodWithCamelCaseProperty()
    {
        $builder = new ObjectWithTraitBuilder();

        $object = $builder
          ->withTestCamelCase(ANY_VALUE)
          ->build();

        $this->assertEquals($object->testCamelCase, ANY_VALUE);
    }

    /**
     * @expectedException \BuilderTrait\Exception
     */
    public function testExceptionOnNotPresentProperty()
    {
        $builder = new ObjectWithTraitBuilder();

        $builder->withNotExistentProperty();
    }
}

class ObjectWithTraitBuilder
{
    use With;

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
