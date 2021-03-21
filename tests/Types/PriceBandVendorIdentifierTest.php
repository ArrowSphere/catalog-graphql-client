<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandVendorIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandVendorIdentifierTest
 */
class PriceBandVendorIdentifierTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandVendorIdentifier = new PriceBandVendorIdentifier([
            PriceBandVendorIdentifier::PURCHASE_PLAN => 'purchase plan',
            PriceBandVendorIdentifier::SKU           => 'sku',
        ]);

        self::assertSame('purchase plan', $priceBandVendorIdentifier->getPurchasePlan());
        self::assertSame('sku', $priceBandVendorIdentifier->getSku());

        $priceBandVendorIdentifier
            ->setSku('sku2')
            ->setPurchasePlan('my purchase plan')
        ;

        self::assertSame('my purchase plan', $priceBandVendorIdentifier->getPurchasePlan());
        self::assertSame('sku2', $priceBandVendorIdentifier->getSku());
    }
}
