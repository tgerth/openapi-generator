<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\ArrayTest;

/**
 * ArrayTestTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\ArrayTest
 */
class ArrayTestTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ArrayTest"
     */
    public function testArrayTest()
    {
        $testArrayTest = new ArrayTest();
        $this->markTestIncomplete(
            'Test of "ArrayTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "arrayOfString"
     */
    public function testPropertyArrayOfString()
    {
        $this->markTestIncomplete(
            'Test of "arrayOfString" property in "ArrayTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "arrayArrayOfInteger"
     */
    public function testPropertyArrayArrayOfInteger()
    {
        $this->markTestIncomplete(
            'Test of "arrayArrayOfInteger" property in "ArrayTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "arrayArrayOfModel"
     */
    public function testPropertyArrayArrayOfModel()
    {
        $this->markTestIncomplete(
            'Test of "arrayArrayOfModel" property in "ArrayTest" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = ArrayTest::getOpenApiSchema();
        $schemaArr = ArrayTest::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}
