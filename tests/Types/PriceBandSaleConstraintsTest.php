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
            PriceBandSaleConstraints::AVAILABLE_DATE => '1970-01-01T00:00:00.000Z',
            PriceBandSaleConstraints::EXPIRY_DATE    => '2199-12-31T23:59:59.000Z',
            PriceBandSaleConstraints::MIN_QUANTITY   => 1,
            PriceBandSaleConstraints::MAX_QUANTITY   => 12,
        ]);

        self::assertSame('1970-01-01T00:00:00.000Z', $priceBandSaleConstraints->getAvailableDate());
        self::assertSame('2199-12-31T23:59:59.000Z', $priceBandSaleConstraints->getExpiryDate());
        self::assertSame(1, $priceBandSaleConstraints->getMinQuantity());
        self::assertSame(12, $priceBandSaleConstraints->getMaxQuantity());

        $priceBandSaleConstraints
            ->setAvailableDate('2020-01-01T00:00:00.000Z')
            ->setExpiryDate('2020-12-31T23:59:59.000Z')
            ->setMaxQuantity(4)
            ->setMinQuantity(2)
        ;

        self::assertSame('2020-01-01T00:00:00.000Z', $priceBandSaleConstraints->getAvailableDate());
        self::assertSame('2020-12-31T23:59:59.000Z', $priceBandSaleConstraints->getExpiryDate());
        self::assertSame(2, $priceBandSaleConstraints->getMinQuantity());
        self::assertSame(4, $priceBandSaleConstraints->getMaxQuantity());
    }
}
