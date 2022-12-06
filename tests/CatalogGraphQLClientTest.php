<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests;

use ArrowSphere\CatalogGraphQLClient\CatalogGraphQLClient;
use ArrowSphere\CatalogGraphQLClient\Input\Filter;
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;
use ArrowSphere\CatalogGraphQLClient\Schema\Product as ProductSchema;
use ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier;
use GraphQL\Client;
use GraphQL\Results;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Class CatalogGraphQLClientTest
 */
class CatalogGraphQLClientTest extends TestCase
{
    public function testFindProduct(): void
    {
        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $body = <<<JSON
{
    "data": {
        "getProducts": {
            "products": [
                {
                    "identifiers": {
                        "arrowsphere": {
                            "orderableSku": "U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU="
                        },
                        "vendor": {
                            "sku": "031C9E47-4802-4248-838E-778FB1D2CC05"
                        }
                    },
                    "name": "Microsoft 365 Business Standard"
                }
            ],
            "pagination": {
                "perPage": 100,
                "currentPage": 1,
                "totalPage": 1,
                "total": 1
            }
        }
    }
}
JSON;

        $response = new Response(200, [], $body);

        $mockedResults = new Results($response);

        $client->method('runQuery')->willReturn($mockedResults);

        $catalogGraphQLClient = new CatalogGraphQLClient('https://example.com', 'my_token', $client);

        $filters = [
            [
                Filter::NAME => ProductSchema::CLASSIFICATION,
                Filter::VALUE => 'SaaS',
            ],
            [
                Filter::NAME => ProductSchema::IDENTIFIERS_VENDOR_SKU,
                Filter::VALUE => '031C9E47-4802-4248-838E-778FB1D2CC05',
            ],
            [
                Filter::NAME => ProductSchema::PROGRAM_LEGACY_CODE,
                Filter::VALUE => 'microsoft',
            ],
        ];

        $fields = [
            Product::NAME,
            Product::IDENTIFIERS => [
                Identifiers::ARROWSPHERE => [
                    ArrowsphereIdentifier::ORDERABLE_SKU,
                ],
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU,
                ]
            ]
        ];

        $searchBody = [
            SearchBody::MARKETPLACE => 'US',
            SearchBody::FILTERS     => $filters,
        ];

        $result = $catalogGraphQLClient->findProducts($searchBody, $fields);

        $product = $result->getProducts()[0];

        self::assertEquals(
            'U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU=',
            $product->getIdentifiers()->getArrowsphere()->getOrderableSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'Microsoft 365 Business Standard',
            $product->getName()
        );

        $result = $catalogGraphQLClient->findProducts($searchBody, $fields);

        $product = $result->getProducts()[0];

        self::assertEquals(
            'U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU=',
            $product->getIdentifiers()->getArrowsphere()->getOrderableSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'Microsoft 365 Business Standard',
            $product->getName()
        );
    }

    public function testFindOne(): void
    {
        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $body = <<<JSON
{
    "data": {
        "product": {
            "identifiers": {
                "arrowsphere": {
                    "orderableSku": "U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU="
                },
                "vendor": {
                    "sku": "031C9E47-4802-4248-838E-778FB1D2CC05"
                }
            },
            "name": "Microsoft 365 Business Standard"
        }
    }
}
JSON;

        $response = new Response(200, [], $body);

        $mockedResults = new Results($response);

        $client->method('runQuery')->willReturn($mockedResults);

        $catalogGraphQLClient = new CatalogGraphQLClient('https://example.com', 'my_token', $client);

        $filters = [
            [
                Filter::NAME => ProductSchema::CLASSIFICATION,
                Filter::VALUE => 'SaaS',
            ],
            [
                Filter::NAME => ProductSchema::IDENTIFIERS_VENDOR_SKU,
                Filter::VALUE => '031C9E47-4802-4248-838E-778FB1D2CC05',
            ],
            [
                Filter::NAME => ProductSchema::PROGRAM_LEGACY_CODE,
                Filter::VALUE => 'microsoft',
            ],
        ];

        $fields = [
            Product::NAME,
            Product::IDENTIFIERS => [
                Identifiers::ARROWSPHERE => [
                    ArrowsphereIdentifier::ORDERABLE_SKU,
                ],
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU,
                ]
            ]
        ];

        $searchBody = [
            SearchBody::MARKETPLACE => 'US',
            SearchBody::FILTERS     => $filters,
        ];

        $product = $catalogGraphQLClient->findOneProduct($searchBody, $fields);

        self::assertEquals(
            'U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU=',
            $product->getIdentifiers()->getArrowsphere()->getOrderableSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'Microsoft 365 Business Standard',
            $product->getName()
        );

        $product = $catalogGraphQLClient->findOneProduct($searchBody, $fields);

        self::assertEquals(
            'U2FhU3x8TWljcm9zb2Z0fHxNU18wQV9PMzY1X0JVU0lORVNTfHwwMzFDOUU0Ny00ODAyLTQyNDgtODM4RS03NzhGQjFEMkNDMDU=',
            $product->getIdentifiers()->getArrowsphere()->getOrderableSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'Microsoft 365 Business Standard',
            $product->getName()
        );
    }

    public function testFindPriceBands(): void
    {
        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $body = <<<JSON
{
    "data": {
        "getPriceBands": {
            "priceBands": [
                {
                    "identifiers": {
                        "arrowsphere": {
                            "sku": "MS_031C9E47_4802_4248_838E_778FB1D2CC05_USD_1_RECURRING_SEAT"
                        },
                        "vendor": {
                            "sku": "031C9E47-4802-4248-838E-778FB1D2CC05"
                        }
                    },
                    "currency": "USD"
                }
            ],
            "pagination": {
                "perPage": 100,
                "currentPage": 1,
                "totalPage": 1,
                "total": 1
            }
        }
    }
}
JSON;

        $response = new Response(200, [], $body);

        $mockedResults = new Results($response);

        $client->method('runQuery')->willReturn($mockedResults);

        $catalogGraphQLClient = new CatalogGraphQLClient('https://example.com', 'my_token', $client);

        $filters = [
            [
                Filter::NAME => ProductSchema::CLASSIFICATION,
                Filter::VALUE => 'SaaS',
            ],
            [
                Filter::NAME => ProductSchema::IDENTIFIERS_VENDOR_SKU,
                Filter::VALUE => '031C9E47-4802-4248-838E-778FB1D2CC05',
            ],
            [
                Filter::NAME => ProductSchema::PROGRAM_LEGACY_CODE,
                Filter::VALUE => 'microsoft',
            ],
        ];

        $fields = [
            Product::NAME,
            Product::IDENTIFIERS => [
                Identifiers::ARROWSPHERE => [
                    ArrowsphereIdentifier::SKU,
                ],
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU,
                ]
            ]
        ];

        $searchBody = [
            SearchBody::MARKETPLACE => 'US',
            SearchBody::FILTERS     => $filters,
        ];

        $result = $catalogGraphQLClient->findPriceBands($searchBody, $fields);

        $product = $result->getPriceBands()[0];

        self::assertEquals(
            'MS_031C9E47_4802_4248_838E_778FB1D2CC05_USD_1_RECURRING_SEAT',
            $product->getIdentifiers()->getArrowsphere()->getSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'USD',
            $product->getCurrency()
        );
    }

    public function testFindOnePriceBand(): void
    {
        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $body = <<<JSON
{
    "data": {
        "priceBand": {
            "identifiers": {
                "arrowsphere": {
                    "sku": "MS_031C9E47_4802_4248_838E_778FB1D2CC05_USD_1_RECURRING_SEAT"
                },
                "vendor": {
                    "sku": "031C9E47-4802-4248-838E-778FB1D2CC05"
                }
            },
            "currency": "USD"
        }
    }
}
JSON;

        $response = new Response(200, [], $body);

        $mockedResults = new Results($response);

        $client->method('runQuery')->willReturn($mockedResults);

        $catalogGraphQLClient = new CatalogGraphQLClient('https://example.com', 'my_token', $client);

        $filters = [
            [
                Filter::NAME => ProductSchema::CLASSIFICATION,
                Filter::VALUE => 'SaaS',
            ],
            [
                Filter::NAME => ProductSchema::IDENTIFIERS_VENDOR_SKU,
                Filter::VALUE => '031C9E47-4802-4248-838E-778FB1D2CC05',
            ],
            [
                Filter::NAME => ProductSchema::PROGRAM_LEGACY_CODE,
                Filter::VALUE => 'microsoft',
            ],
        ];

        $fields = [
            Product::NAME,
            Product::IDENTIFIERS => [
                Identifiers::ARROWSPHERE => [
                    ArrowsphereIdentifier::SKU,
                ],
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU,
                ]
            ]
        ];

        $searchBody = [
            SearchBody::MARKETPLACE => 'US',
            SearchBody::FILTERS     => $filters,
        ];

        $product = $catalogGraphQLClient->findOnePriceBand($searchBody, $fields);

        self::assertEquals(
            'MS_031C9E47_4802_4248_838E_778FB1D2CC05_USD_1_RECURRING_SEAT',
            $product->getIdentifiers()->getArrowsphere()->getSku()
        );

        self::assertEquals(
            '031C9E47-4802-4248-838E-778FB1D2CC05',
            $product->getIdentifiers()->getVendor()->getSku()
        );

        self::assertEquals(
            'USD',
            $product->getCurrency()
        );
    }
}
