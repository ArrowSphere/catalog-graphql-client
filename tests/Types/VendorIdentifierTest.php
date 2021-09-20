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

        $vendorIdentifier
            ->setName('my name')
            ->setFamily('my family')
            ->setSku('my sku')
            ->setOfferName('my name')
            ->setAttributes(new Attributes([
                Attributes::CAN_SWITCH_AUTO_RENEW   => true,
                Attributes::CANCEL_SUBSCRIPTION     => true,
                Attributes::DECREASE_SEATS          => true,
                Attributes::INCREASE_SEATS          => true,
                Attributes::PART_IDENTIFIER         => 'part identifier',
                Attributes::PERIODICITY             => 720,
                Attributes::PLAN_ID                 => 'plan id',
                Attributes::PRODUCT_ID              => 'product id',
                Attributes::PRODUCT_SKU             => 'product sku',
                Attributes::REACTIVATE_SUBSCRIPTION => true,
                Attributes::SUSPEND_SUBSCRIPTION    => true,
                Attributes::TERM                    => 8640,
                Attributes::UNIT_TYPE               => 'unit type',
            ]))
        ;

        self::assertInstanceOf(Attributes::class, $vendorIdentifier->getAttributes());
        self::assertEquals('part identifier', $vendorIdentifier->getAttributes()->getPartIdentifier());
        self::assertSame('my family', $vendorIdentifier->getFamily());
        self::assertSame('my name', $vendorIdentifier->getName());
        self::assertSame('my name', $vendorIdentifier->getOfferName());
        self::assertSame('my sku', $vendorIdentifier->getSku());
    }
}
