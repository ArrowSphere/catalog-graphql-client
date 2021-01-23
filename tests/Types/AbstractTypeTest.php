<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\AbstractType;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTypeTest
 */
class AbstractTypeTest extends TestCase
{
    /**
     * @throws \ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException
     */
    public function testFields(): void
    {
        $data = [
            'testBool'             => true,
            'testString'           => 'test string',
            'testInt'              => 42,
            'testFloat'            => 3.14,
            'testOtherType'        => [
                'test' => 'test other type',
            ],
            'testArrayOfBool'      => [
                true,
                false,
                true,
            ],
            'testArrayOfString'    => [
                'test',
                'array',
                'of',
                'string',
            ],
            'testArrayOfInt'       => [
                42,
                12,
                48,
            ],
            'testArrayOfFloat'     => [
                1.01,
                3.14,
                2.18,
            ],
            'testArrayOfOtherType' => [
                [
                    'test' => 'test',
                ],
                [
                    'test' => 'array',
                ],
                [
                    'test' => 'of other type',
                ],
            ],
            'testNullableField'    => null,
        ];

        $myType = new MyType($data);

        self::assertTrue($myType->getTestBool());
        self::assertSame('test string', $myType->getTestString());
        self::assertSame(42, $myType->getTestInt());
        self::assertSame(3.14, $myType->getTestFloat());
        self::assertInstanceOf(MyOtherType::class, $myType->getTestOtherType());

        self::assertSame([
            true,
            false,
            true,
        ], $myType->getTestArrayOfBool());

        self::assertSame([
            'test',
            'array',
            'of',
            'string',
        ], $myType->getTestArrayOfString());

        self::assertSame([
            42,
            12,
            48,
        ], $myType->getTestArrayOfInt());

        self::assertSame([
            1.01,
            3.14,
            2.18,
        ], $myType->getTestArrayOfFloat());

        self::assertNull($myType->getTestNullableField());

        $otherTypes = $myType->getTestArrayOfOtherType();

        $test = array_shift($otherTypes);
        self::assertSame('test', $test->getTest());

        $test = array_shift($otherTypes);
        self::assertSame('array', $test->getTest());

        $test = array_shift($otherTypes);
        self::assertSame('of other type', $test->getTest());

        $this->expectException(UnrequestedFieldException::class);
        $myType->getTestUnrequestedField();
    }
}

/**
 * Class MyType
 *
 * @method bool getTestBool()
 * @method string getTestString()
 * @method int getTestInt()
 * @method float getTestFloat()
 * @method MyOtherType getTestOtherType()
 * @method bool[] getTestArrayOfBool()
 * @method string[] getTestArrayOfString()
 * @method int[] getTestArrayOfInt()
 * @method float[] getTestArrayOfFloat()
 * @method MyOtherType[] getTestArrayOfOtherType()
 * @method string getTestNullableField()
 * @method string getTestUnrequestedField()
 */
class MyType extends AbstractType
{
    protected const MAPPING = [
        'testBool'             => self::TYPE_BOOL,
        'testString'           => self::TYPE_STRING,
        'testInt'              => self::TYPE_INT,
        'testFloat'            => self::TYPE_FLOAT,
        'testOtherType'        => MyOtherType::class,
        'testArrayOfBool'      => [
            self::MAPPING_TYPE  => self::TYPE_BOOL,
            self::MAPPING_ARRAY => true,
        ],
        'testArrayOfString'    => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        'testArrayOfInt'       => [
            self::MAPPING_TYPE  => self::TYPE_INT,
            self::MAPPING_ARRAY => true,
        ],
        'testArrayOfFloat'     => [
            self::MAPPING_TYPE  => self::TYPE_FLOAT,
            self::MAPPING_ARRAY => true,
        ],
        'testArrayOfOtherType' => [
            self::MAPPING_TYPE  => MyOtherType::class,
            self::MAPPING_ARRAY => true,
        ],
        'testNullableField'    => self::TYPE_STRING,
        'testUnrequestedField' => self::TYPE_STRING,

    ];
}

/**
 * Class MyOtherType
 *
 * @method string getTest()
 */
class MyOtherType extends AbstractType
{
    protected const MAPPING = [
        'test' => self::TYPE_STRING,
    ];
}
