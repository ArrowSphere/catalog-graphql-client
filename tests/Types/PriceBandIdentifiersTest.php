<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ErpIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandArrowsphereIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandIdentifiers;
use ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandIdentifiers
 */
class PriceBandIdentifiersTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandIdentifiers = new PriceBandIdentifiers([
            PriceBandIdentifiers::ARROWSPHERE => [],
            PriceBandIdentifiers::ERP         => [],
            PriceBandIdentifiers::VENDOR      => [],
        ]);

        self::assertInstanceOf(PriceBandArrowsphereIdentifier::class, $priceBandIdentifiers->getArrowsphere());
        self::assertInstanceOf(ErpIdentifier::class, $priceBandIdentifiers->getErp());
        self::assertInstanceOf(VendorIdentifier::class, $priceBandIdentifiers->getVendor());
    }
}
