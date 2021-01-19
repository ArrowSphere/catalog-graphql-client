<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Attributes;
use ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class VendorIdentifierTest
 */
class VendorIdentifierTest extends TestCase
{
    public function testFields(): void
    {
        $vendorIdentifier = new VendorIdentifier([
            VendorIdentifier::ATTRIBUTES => [],
            VendorIdentifier::FAMILY     => 'family',
            VendorIdentifier::NAME       => 'name',
            VendorIdentifier::OFFER_NAME => 'offer name',
            VendorIdentifier::SKU        => 'sku',
        ]);

        self::assertInstanceOf(Attributes::class, $vendorIdentifier->getAttributes());
        self::assertSame('family', $vendorIdentifier->getFamily());
        self::assertSame('name', $vendorIdentifier->getName());
        self::assertSame('offer name', $vendorIdentifier->getOfferName());
        self::assertSame('sku', $vendorIdentifier->getSku());
    }
}
