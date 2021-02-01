<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests;

use ArrowSphere\CatalogGraphQLClient\CatalogGraphQLClient;
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;
use ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use ArrowSphere\CatalogGraphQLClient\Types\Program;
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
    public function ztestFind(): void
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
            Product::CLASSIFICATION => 'SaaS',
            Product::IDENTIFIERS => [
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU => '031C9E47-4802-4248-838E-778FB1D2CC05',
                ],
            ],
            Product::PROGRAM => [
                Program::LEGACY_CODE => 'microsoft',
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

        $result = $catalogGraphQLClient->find($searchBody, $fields);

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
            Product::CLASSIFICATION => 'SaaS',
            Product::IDENTIFIERS => [
                Identifiers::VENDOR => [
                    VendorIdentifier::SKU => '031C9E47-4802-4248-838E-778FB1D2CC05',
                ],
            ],
            Product::PROGRAM => [
                Program::LEGACY_CODE => 'microsoft',
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

        $product = $catalogGraphQLClient->findOne($searchBody, $fields);

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
}
