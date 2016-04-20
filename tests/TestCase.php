<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:40 PM
 */

namespace Freshdesk\tests;

use Freshdesk\Api;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{

    abstract function methodsThatShouldExist();

    /**
     * @var Api
     */
    protected $api;

    /**
     * The specific class being tested
     * @var
     */
    protected $class;

    public function setUp()
    {
        $this->api = new Api("foo", "bar");
    }

    /**
     * @dataProvider methodsThatShouldExist
     */
    public function testMethodsExist($method)
    {
        $this->assertMethodExists($method);
    }

    //Helpers

    protected function assertMethodExists($method)
    {
        $this->assertTrue(
            method_exists($this->class, $method)
        );
    }

    protected function invokeMethod($method, array $params)
    {
        $reflection = new \ReflectionClass(get_class($this->class));
        $method = $reflection->getMethod($method);
        $method->setAccessible(true);

        return $method->invokeArgs($this->class, $params);
    }

    protected function assertEndpoint($expected, $id = null)
    {
        $actual = $this->invokeMethod('endpoint', [$id]);

        $this->assertEquals($expected, $actual);
    }

}