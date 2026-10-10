# ArrowSphere Catalog GraphQL Client package

[![Latest Stable Version](https://img.shields.io/packagist/v/arrowsphere/catalog-graphql-client)](https://packagist.org/packages/arrowsphere/catalog-graphql-client)
[![Minimum PHP Version](https://img.shields.io/packagist/php-v/arrowsphere/catalog-graphql-client)](https://img.shields.io/packagist/php-v/arrowsphere/catalog-graphql-client)
[![Build Status](https://img.shields.io/github/actions/workflow/status/ArrowSphere/catalog-graphql-client/ci.yml?branch=master)](https://github.com/ArrowSphere/catalog-graphql-client/actions)
[![Static Analysis](https://img.shields.io/github/actions/workflow/status/ArrowSphere/catalog-graphql-client/static.yml?branch=master&label=static%20analysis)](https://github.com/ArrowSphere/catalog-graphql-client/actions)
[![Coverage Status](https://img.shields.io/coverallsCoverage/github/ArrowSphere/catalog-graphql-client?branch=master)](https://coveralls.io/github/ArrowSphere/catalog-graphql-client?branch=master)
[![PHPStan Level](https://img.shields.io/badge/PHPStan-level%20max-brightgreen)](https://phpstan.org/)
[![Total Downloads](https://img.shields.io/packagist/dt/arrowsphere/catalog-graphql-client)](https://packagist.org/packages/arrowsphere/catalog-graphql-client)
[![License](https://img.shields.io/packagist/l/arrowsphere/catalog-graphql-client)](LICENSE)

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
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;
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

$searchBody = [
    SearchBody::MARKETPLACE => 'US',
    SearchBody::FILTERS     => $filters,
];

$result = $client->findProducts($searchBody, $fields);

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

Please note that each field is nullable, you need to request a field for it to be populated by the API.

### Searching

| Method                                                  | GraphQL query   | Returns                                                  |
|---------------------------------------------------------|-----------------|----------------------------------------------------------|
| ```findProducts($searchBody, $fields, $page, $perPage)```   | ```getProducts```   | ```PaginatedProducts```, with ```getProducts()``` and ```getPagination()```     |
| ```findPriceBands($searchBody, $fields, $page, $perPage)``` | ```getPriceBands``` | ```PaginatedPriceBands```, with ```getPriceBands()``` and ```getPagination()``` |
| ```findOneProduct($searchBody, $fields)```                  | ```product```       | the matching ```Product```, or ```null```                     |
| ```findOnePriceBand($searchBody, $fields)```                | ```priceBand```     | the matching ```PriceBand```, or ```null```                   |

The paginated methods return the first page of 100 results by default; use ```$page``` and ```$perPage``` to go further, with the ```Pagination``` entity (```getTotal()```, ```getTotalPage()```) to know how many pages there are.

```php
<?php

use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;

$priceBand = $client->findOnePriceBand($searchBody, [
    PriceBand::NAME,
]);

if ($priceBand !== null) {
    echo $priceBand->getName() . PHP_EOL;
}
```

The ```find()``` and ```findOne()``` methods are deprecated aliases of ```findProducts()``` and ```findOneProduct()```.

### Generic queries

There is also a generic ```call``` method in the ```CatalogGraphQLClient``` class that allows you to perform any query on the GraphQL API. This method doesn't provide any help, so it's a bit complicated to use "as is". The search methods above are recommended.
