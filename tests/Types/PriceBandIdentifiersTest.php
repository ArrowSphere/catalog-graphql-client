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

        $priceBandIdentifiers
            ->setArrowsphere(new PriceBandArrowsphereIdentifier([
                PriceBandArrowsphereIdentifier::SKU => 'sku',
            ]))
            ->setErp(new ErpIdentifier([
                ErpIdentifier::SKU => 'sku',
            ]))
            ->setVendor(new VendorIdentifier([
                VendorIdentifier::ATTRIBUTES => [],
                VendorIdentifier::FAMILY     => 'family',
                VendorIdentifier::NAME       => 'name',
                VendorIdentifier::OFFER_NAME => 'offer name',
                VendorIdentifier::SKU        => 'sku',
            ]));

        self::assertInstanceOf(PriceBandArrowsphereIdentifier::class, $priceBandIdentifiers->getArrowsphere());
        self::assertEquals("sku", $priceBandIdentifiers->getArrowsphere()->getSku());
        self::assertInstanceOf(ErpIdentifier::class, $priceBandIdentifiers->getErp());
        self::assertEquals("sku", $priceBandIdentifiers->getErp()->getSku());
        self::assertInstanceOf(VendorIdentifier::class, $priceBandIdentifiers->getVendor());
        self::assertEquals("family", $priceBandIdentifiers->getVendor()->getFamily());
    }
}
