<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandSaleConstraints;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandSaleConstraintsTest
 */
class PriceBandSaleConstraintsTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandSaleConstraints = new PriceBandSaleConstraints([
            PriceBandSaleConstraints::MAX_QUANTITY   => 12,
            PriceBandSaleConstraints::MIN_QUANTITY   => 1,
            PriceBandSaleConstraints::EXPIRY_DATE    => '2199-12-31T23:59:59.000Z',
            PriceBandSaleConstraints::AVAILABLE_DATE => '1970-01-01T00:00:00.000Z',
        ]);

        self::assertSame(12, $priceBandSaleConstraints->getMaxQuantity());
        self::assertSame(1, $priceBandSaleConstraints->getMinQuantity());
        self::assertSame('2199-12-31T23:59:59.000Z', $priceBandSaleConstraints->getExpiryDate());
        self::assertSame('1970-01-01T00:00:00.000Z', $priceBandSaleConstraints->getAvailableDate());
    }
}
