<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use ArrowSphere\CatalogGraphQLClient\Types\DynamicAttributes;
use ArrowSphere\CatalogGraphQLClient\Types\OfferLight;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandActionFlags;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandAttribute;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandIdentifiers;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBandSaleConstraints;
use ArrowSphere\CatalogGraphQLClient\Types\Prices;
use ArrowSphere\CatalogGraphQLClient\Types\Program;
use ArrowSphere\CatalogGraphQLClient\Types\PromotionPrices;
use ArrowSphere\CatalogGraphQLClient\Types\Uom;
use ArrowSphere\CatalogGraphQLClient\Types\Vendor;
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
            PriceBand::DYNAMIC_ATTRIBUTES => [],
            PriceBand::ATTRIBUTES         => [
                [],
            ],
            PriceBand::PROMOTION_PRICES => [],
            PriceBand::OFFER            => [],
            PriceBand::VENOOR           => [],
            PriceBand::PROGRAM          => [],

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
        self::assertIsArray($priceBand->getAttributes());
        self::assertInstanceOf(PriceBandAttribute::class, $priceBand->getAttributes()[0]);
        self::assertInstanceOf(PromotionPrices::class, $priceBand->getPromotionPrices());
        self::assertInstanceOf(OfferLight::class, $priceBand->getOffer());
        self::assertInstanceOf(Vendor::class, $priceBand->getVendor());
        self::assertInstanceOf(Program::class, $priceBand->getProgram());

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
            ->setAttributes([
                new PriceBandAttribute([
                    PriceBandAttribute::NAME  => 'ram',
                    PriceBandAttribute::VALUE => '32'
                ])
            ])
            ->setPromotionPrices(new PromotionPrices([
                PromotionPrices::PROMOTION_ID => 'ABC',
                PromotionPrices::PRICES => [
                    'buy' => '50',
                    'sell' => '80',
                    'public' => '100',
                ],
            ]))
        ;

        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('EUR', $priceBand->getCurrency());
        self::assertFalse($priceBand->getIsEnabled());
        self::assertEquals('FR', $priceBand->getMarketplace());
        self::assertEquals('lol', $priceBand->getOrderingType());
        self::assertEquals('ram', $priceBand->getAttributes()[0]->getName());
        self::assertEquals('32', $priceBand->getAttributes()[0]->getValue());
        self::assertInstanceOf(PromotionPrices::class, $priceBand->getPromotionPrices());
        self::assertEquals('ABC', $priceBand->getPromotionPrices()->getPromotionId());
        self::assertEquals('50', $priceBand->getPromotionPrices()->getPrices()->getBuy());
        self::assertEquals('80', $priceBand->getPromotionPrices()->getPrices()->getSell());
        self::assertEquals('100', $priceBand->getPromotionPrices()->getPrices()->getPublic());
    }
}
