<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use ArrowSphere\CatalogGraphQLClient\Types\DynamicAttributes;
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
    /**
     * @throws NonExistingFieldException
     */
    public function testFields(): void
    {
        $priceBand = new PriceBand([
            PriceBand::ACTION_FLAGS       => [],
            PriceBand::BILLING            => [],
            PriceBand::CURRENCY           => 'USD',
            PriceBand::IDENTIFIERS        => [],
            PriceBand::IS_ENABLED         => true,
            PriceBand::MARKETPLACE        => 'US',
            PriceBand::ORDERING_TYPE      => 'RECURRING',
            PriceBand::PRICES             => [],
            PriceBand::SALE_CONSTRAINTS   => [],
            PriceBand::UOM                => [],
            PriceBand::DYNAMIC_ATTRIBUTES => []
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
        self::assertInstanceOf(DynamicAttributes::class, $priceBand->getDynamicAttributes());

        $priceBand
            ->setMarketplace('FR')
            ->setOrderingType('lol')
            ->setCurrency('EUR')
            ->setIsEnabled(false)
            ->setBilling(new Billing([
                Billing::CYCLE => 720,
                Billing::TERM  => 8640,
                Billing::TYPE  => 'type',
            ]))
        ;

        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('EUR', $priceBand->getCurrency());
        self::assertFalse($priceBand->getIsEnabled());
        self::assertEquals('FR', $priceBand->getMarketplace());
        self::assertEquals('lol', $priceBand->getOrderingType());
    }
}
