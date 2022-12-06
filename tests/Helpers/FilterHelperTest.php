<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Helpers;

use ArrowSphere\CatalogGraphQLClient\Helpers\FilterHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class FilterHelperTest
 */
class FilterHelperTest extends TestCase
{
    public function providerGetSearchBodyFilters(): array
    {
        return [
            'empty'              => [
                'inputArray' => [],
                'expected'   => [],
            ],
            'oneValue'           => [
                'inputArray' => [
                    [
                        'name'  => 'test1',
                        'value' => 'val1',
                    ],                ],
                'expected'   => [
                    [
                        'name'  => 'test1',
                        'value' => 'val1',
                    ],
                ],
            ],
            'nonStringValues'    => [
                'inputArray' => [
                    [
                        'name'  => 'testBool',
                        'value' => true,
                    ],
                    [
                        'name'  => 'testInt',
                        'value' => 42,
                    ],
                    [
                        'name'  => 'testFloat',
                        'value' => 12.34,
                    ],
                ],
                'expected'   => [
                    [
                        'name'  => 'testBool',
                        'value' => 'true',
                    ],
                    [
                        'name'  => 'testInt',
                        'value' => '42',
                    ],
                    [
                        'name'  => 'testFloat',
                        'value' => '12.34',
                    ],
                ],
            ],
            'multipleValues'     => [
                'inputArray' => [
                    [
                        'name'  => 'test1',
                        'value' => [
                            'val1',
                            'val2',
                        ],
                    ],
                ],
                'expected'   => [
                    [
                        'name'  => 'test1',
                        'value' => [
                            'val1',
                            'val2',
                        ],
                    ],
                ],
            ],
            'nesetedFilters'     => [
                'inputArray' => [
                    [
                        'name'    => 'test1',
                        'value'   => [
                            'val1',
                            'val2',
                        ],
                        'filters' => [
                            [
                                'name'  => 'nestedTest1',
                                'value' => 'nestedVal1'
                            ]
                        ]
                    ],
                ],
                'expected'   => [
                    [
                        'name'    => 'test1',
                        'value'   => [
                            'val1',
                            'val2',
                        ],
                        'filters' => [
                            [
                                'name'  => 'nestedTest1',
                                'value' => 'nestedVal1'
                            ]
                        ]
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider providerGetSearchBodyFilters
     *
     * @param array $inputArray
     * @param array $expected
     */
    public function testGetSearchBodyFilters(array $inputArray, array $expected): void
    {
        self::assertSame($expected, (new FilterHelper($inputArray))->getSearchBodyFilters());
    }
}
