<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Attribute;
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
use ArrowSphere\CatalogGraphQLClient\Types\PromotionsPrice;
use ArrowSphere\CatalogGraphQLClient\Types\Uom;
use ArrowSphere\CatalogGraphQLClient\Types\Vendor;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandTest
 */
class PriceBandTest extends TestCase
{
    public function testFields(): void
    {
        $priceBand = new PriceBand([
            PriceBand::ACTION_FLAGS       => [],
            PriceBand::BILLING            => [],
            PriceBand::CURRENCY           => 'USD',
            PriceBand::IDENTIFIERS        => [],
            PriceBand::IS_ENABLED         => true,
            PriceBand::IS_BUYABLE         => true,
            PriceBand::MARKETPLACE        => 'US',
            PriceBand::ORDERING_TYPE      => 'RECURRING',
            PriceBand::PRICES             => [],
            PriceBand::SALE_CONSTRAINTS   => [],
            PriceBand::UOM                => [],
            PriceBand::DYNAMIC_ATTRIBUTES => [],
            PriceBand::ATTRIBUTES         => [
                [],
            ],
            PriceBand::PROMOTION_PRICES  => [],
            PriceBand::PROMOTIONS_PRICES => [
                [],
            ],
            PriceBand::OFFER             => [],
            PriceBand::VENDOR            => [],
            PriceBand::PROGRAM           => [],
            PriceBand::PRICING_RULES         => [
                [],
            ],
        ]);

        self::assertInstanceOf(PriceBandActionFlags::class, $priceBand->getActionFlags());
        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('USD', $priceBand->getCurrency());
        self::assertInstanceOf(PriceBandIdentifiers::class, $priceBand->getIdentifiers());
        self::assertTrue($priceBand->getIsEnabled());
        self::assertTrue($priceBand->getIsBuyable());
        self::assertEquals('US', $priceBand->getMarketplace());
        self::assertEquals('RECURRING', $priceBand->getOrderingType());
        self::assertInstanceOf(Prices::class, $priceBand->getPrices());
        self::assertInstanceOf(PriceBandSaleConstraints::class, $priceBand->getSaleConstraints());
        self::assertInstanceOf(Uom::class, $priceBand->getUom());
        self::assertInstanceOf(DynamicAttributes::class, $priceBand->getDynamicAttributes());
        self::assertIsArray($priceBand->getAttributes());
        self::assertInstanceOf(PriceBandAttribute::class, $priceBand->getAttributes()[0]);
        self::assertInstanceOf(PromotionPrices::class, $priceBand->getPromotionPrices());
        self::assertIsArray($priceBand->getPromotionsPrices());
        self::assertInstanceOf(PromotionsPrice::class, $priceBand->getPromotionsPrices()[0]);
        self::assertInstanceOf(OfferLight::class, $priceBand->getOffer());
        self::assertInstanceOf(Vendor::class, $priceBand->getVendor());
        self::assertInstanceOf(Program::class, $priceBand->getProgram());
        self::assertIsArray($priceBand->getPricingRules());

        $priceBand
            ->setMarketplace('FR')
            ->setOrderingType('lol')
            ->setCurrency('EUR')
            ->setIsEnabled(false)
            ->setIsBuyable(false)
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
            ->setPromotionsPrices([
                new PromotionsPrice([
                    PromotionsPrice::PROMOTION_ID => 'DEF',
                    PromotionsPrice::PRICES => [
                        'buy' => '51',
                        'sell' => '81',
                        'public' => '101',
                    ],
                    PromotionsPrice::ATTRIBUTES => [
                        [
                            Attribute::NAME  => 'name E3',
                            Attribute::VALUE => 'value H7',
                        ],
                        [
                            Attribute::NAME  => 'name A1',
                            Attribute::VALUE => 'value BZ',
                        ],
                    ]
                ])
            ])
        ;

        self::assertInstanceOf(Billing::class, $priceBand->getBilling());
        self::assertEquals('EUR', $priceBand->getCurrency());
        self::assertFalse($priceBand->getIsEnabled());
        self::assertFalse($priceBand->getIsBuyable());
        self::assertEquals('FR', $priceBand->getMarketplace());
        self::assertEquals('lol', $priceBand->getOrderingType());
        self::assertEquals('ram', $priceBand->getAttributes()[0]->getName());
        self::assertEquals('32', $priceBand->getAttributes()[0]->getValue());
        self::assertInstanceOf(PromotionPrices::class, $priceBand->getPromotionPrices());
        self::assertEquals('ABC', $priceBand->getPromotionPrices()->getPromotionId());
        self::assertEquals('50', $priceBand->getPromotionPrices()->getPrices()->getBuy());
        self::assertEquals('80', $priceBand->getPromotionPrices()->getPrices()->getSell());
        self::assertEquals('100', $priceBand->getPromotionPrices()->getPrices()->getPublic());
        self::assertEquals('DEF', $priceBand->getPromotionsPrices()[0]->getPromotionId());
        self::assertEquals('51', $priceBand->getPromotionsPrices()[0]->getPrices()->getBuy());
        self::assertEquals('81', $priceBand->getPromotionsPrices()[0]->getPrices()->getSell());
        self::assertEquals('101', $priceBand->getPromotionsPrices()[0]->getPrices()->getPublic());
        self::assertEquals('value BZ', $priceBand->getPromotionsPrices()[0]->getAttributes()[1]->getValue());
    }

    public function testRealData(): void
    {
        $offerJson = file_get_contents(__DIR__ . '/../resources/offer.json');
        $offerData = json_decode($offerJson, true);
        $priceBand = new PriceBand($offerData['priceBand'][0]);
        self::assertSame('MS_FTSL_DG7GMGF0M7XW_0004_IT_EUR_RECURRING_8640_8640', $priceBand->getIdentifiers()->getArrowsphere()->getSku());
    }
}
