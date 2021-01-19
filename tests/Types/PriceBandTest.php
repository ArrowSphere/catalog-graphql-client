<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandActionFlags;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandIdentifiers;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandSaleConstraints;
use ArrowSphere\CatalogGraphQLClient\Types\Prices;
use ArrowSphere\CatalogGraphQLClient\Types\Uom;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandTest
 */
class PriceBandTest extends TestCase
{
    public function testFields(): void
    {
        $priceBand = new PriceBand([
            PriceBand::ACTION_FLAGS     => [],
            PriceBand::BILLING          => [],
            PriceBand::CURRENCY         => 'USD',
            PriceBand::IDENTIFIERS      => [],
            PriceBand::IS_ENABLED       => true,
            PriceBand::MARKETPLACE      => 'US',
            PriceBand::ORDERING_TYPE    => 'RECURRING',
            PriceBand::PRICES           => [],
            PriceBand::SALE_CONSTRAINTS => [],
            PriceBand::UOM              => [],
        ]);

        self::assertInstanceOf(PriceBandActionFlags::class, $priceBand->getActionFlags());
        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('USD', $priceBand->getCurrency());
        self::assertInstanceOf(PriceBandIdentifiers::class, $priceBand->getIdentifiers());
        self::assertTrue($priceBand->getIsEnabled());
        self::assertEquals('US', $priceBand->getMarketplace());
        self::assertEquals('RECURRING', $priceBand->getOrderingType());
        self::assertInstanceOf(Prices::class, $priceBand->getPrices());
        self::assertInstanceOf(PriceBandSaleConstraints::class, $priceBand->getSaleConstraints());
        self::assertInstanceOf(Uom::class, $priceBand->getUom());
    }
}
