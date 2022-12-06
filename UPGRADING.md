# Upgrade guide

## 0.6 to 0.7

The format of ```SearchBody::FILTERS``` has changed:

v0.6:

```php
<?php

$searchBody = [
    [SearchBody::FILTERS] => [
        PriceBand::MARKETPLACE => ['FR', 'US'],
        PriceBand::BILLING => [
            Billing::TERM => 8640,
        ],
        PriceBand::IDENTIFIERS => [
            PriceBandsIdentifiers::VENDOR => [
                VendorIdentifier::SKU => 'DGSLKJFLKJ54:542',
            ],
        ],
    ],
];

?>
```

v0.7:

```php
<?php

$searchBody = [
    [SearchBody::FILTERS] => [
        [
            Filter::NAME  => PriceBand::MARKETPLACE,
            Filter::VALUE => ['FR', 'US']
        ],
        [
            Filter::NAME  => PriceBandSchema::BILLING_TERM,
            Filter::VALUE => [8640]
        ],
        [
            Filter::NAME  => PriceBandSchema::IDENTIFIERS_VENDOR_SKU},
            Filter::VALUE => 'DGSLKJFLKJ54:542'
        ],
    ],
];

?>
```

## 0.3 to 0.4

The ```CatalogGraphQLClient::find()``` method has changed its signature. It used to take a ```marketplace``` and
a ```filters``` array, and now it only takes a ```searchBody``` array.

v0.3:

```php
<?php

use ArrowSphere\CatalogGraphQLClient\CatalogGraphQLClient;

$client = new CatalogGraphQLClient('url', 'token');

$marketplace = 'US';

$filters = [
    // whatever filters you need
];

$fields = [
    // whatever fields you need
];

$result = $client->find($marketplace, $filters, $fields);

```

v0.4:

```php
<?php

use ArrowSphere\CatalogGraphQLClient\CatalogGraphQLClient;
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;

$client = new CatalogGraphQLClient('url', 'token');

$marketplace = 'US';

$filters = [
    // whatever filters you need
];

$fields = [
    // whatever fields you need
];

// Here is the difference, now an array must be constructed to perform the ```find()```:
$searchBody = [
    SearchBody::MARKETPLACE => $marketplace,
    SearchBody::FILTERS     => $filters,
];

$result = $client->find($searchBody, $fields);

```
