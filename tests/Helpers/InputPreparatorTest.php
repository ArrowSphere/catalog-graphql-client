<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Helpers;

use ArrowSphere\CatalogGraphQLClient\Helpers\InputPreparator;
use PHPUnit\Framework\TestCase;

/**
 * Class InputPreparatorTest
 */
class InputPreparatorTest extends TestCase
{
    public function providerPrepareInput(): array
    {
        return [
            'empty array'   => [
                'data'     => [],
                'expected' => '[]',
            ],
            'pagination'    => [
                'data'     => [
                    'page'    => 1,
                    'perPage' => 50,
                ],
                'expected' => '{page: 1, perPage: 50}',
            ],
            'searchBody'    => [
                'data'     => [
                    'filters' => [
                        [
                            'name'  => 'field1',
                            'value' => 'value1',
                        ],
                        [
                            'name'  => 'field2',
                            'value' => [
                                'value2.1',
                                'value2.2',
                            ],
                        ],
                    ],
                ],
                'expected' => '{filters: [{name: "field1", value: "value1"}, {name: "field2", value: ["value2.1", "value2.2"]}]}',
            ],
            'double quotes' => [
                'data'     => [
                    'myQuotedString' => '"my value"',
                ],
                'expected' => '{myQuotedString: "\"my value\""}',
            ],
            'spaced value'  => [
                'data'     => [
                    'my spaced index' => 'my value',
                ],
                'expected' => '{"my spaced index": "my value"}',
            ],
        ];
    }

    /**
     * @dataProvider providerPrepareInput
     *
     * @param array $data
     * @param string $expected
     */
    public function testPrepareInput(array $data, string $expected): void
    {
        $inputPreparator = new InputPreparator();

        self::assertSame($expected, $inputPreparator->prepareInput($data));
    }
}
