<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ActionFlags;
use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
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
            PriceBand::IS_ENABLED       => true,
            PriceBand::ACTION_FLAGS     => [],
            PriceBand::BILLING          => [],
            PriceBand::CURRENCY         => 'USD',
            PriceBand::IDENTIFIERS      => [],
            PriceBand::MARKETPLACE      => 'US',
            PriceBand::PRICES           => [],
            PriceBand::SALE_CONSTRAINTS => [],
            PriceBand::ORDERING_TYPE    => 'RECURRING',
            PriceBand::UOM              => [],
        ]);

        self::assertTrue($priceBand->getIsEnabled());
        self::assertInstanceOf(ActionFlags::class, $priceBand->getActionFlags());
        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('USD', $priceBand->getCurrency());
        self::assertInstanceOf(PriceBandIdentifiers::class, $priceBand->getIdentifiers());
        self::assertEquals('US', $priceBand->getMarketplace());
        self::assertInstanceOf(Prices::class, $priceBand->getPrices());
        self::assertInstanceOf(PriceBandSaleConstraints::class, $priceBand->getSaleConstraints());
        self::assertEquals('RECURRING', $priceBand->getOrderingType());
        self::assertInstanceOf(Uom::class, $priceBand->getUom());
    }
}
