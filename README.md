# ArrowSphere Catalog GraphQL Client package

[![Latest Stable Version](https://img.shields.io/packagist/v/arrowsphere/catalog-graphql-client)](https://packagist.org/packages/arrowsphere/catalog-graphql-client)
[![Minimum PHP Version](https://img.shields.io/packagist/php-v/arrowsphere/catalog-graphql-client)](https://img.shields.io/packagist/php-v/arrowsphere/catalog-graphql-client)
[![Build Status](https://img.shields.io/github/workflow/status/ArrowSphere/catalog-graphql-client/CI)](https://github.com/ArrowSphere/catalog-graphql-client/actions)

This package provides a PHP client for ArrowSphere's Catalog GraphQL API.
It should be the only way to make calls to ArrowSphere's Catalog GraphQL API with PHP code.

To use this package, you need valid access to ArrowSphere, with a valid token from the ArrowSphere's authentication platform.

## Installation

Install the latest version with

```bash
$ composer require arrowsphere/catalog-graphql-client
```

## Basic usage

```php
<?php

use ArrowSphere\CatalogGraphQLClient\CatalogGraphQLClient;
use ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use ArrowSphere\CatalogGraphQLClient\Types\Program;
use ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier;

const URL = 'https://your-url-to-arrowsphere.example.com';

$token = 'my token'; // The logic to get the token is not implemented in this package

$client = new CatalogGraphQLClient(URL, $token);

// The filters are defined as a nested array
// They allow you to limit the data you want to see
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

// The fields are also defined as a nested array
// They allow you to limit the fields returned by the GraphQL API, to see only the necessary fields for your need
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

$result = $client->find('US', $filters, $fields);

$products = $result->getProducts();
if (count($products) === 1) {
    $product = $products[0];
    echo sprintf(
        "Product SKU %s : name = %s, orderable SKU = %s",
        $product->getIdentifiers()->getVendor()->getSku(),
        $product->getName(),
        $product->getIdentifiers()->getArrowsphere()->getOrderableSku()
     ) . PHP_EOL;
}

```

## More information
This library returns a result based on the entities defined in the ```ArrowSphere\CatalogGraphQLClient\Types``` namespace.

The ```find``` method from the ```CatalogGraphQLClient``` class is a simplified method that calls the ```getProducts``` query from the API and returns as instance of ```PaginatedProducts``` which allows you to access to any field you requested in the original query.

Please note that each field is nullable, you need to request a field for it to be populated by the API.

There is also a generic ```call``` method in the ```CatalogGraphQLClient``` class that allows you to perform any query on the GraphQL API. This method doesn't provide any help, so it's a bit complicated to use "as is". The usage of the ```find``` method is recommended.
