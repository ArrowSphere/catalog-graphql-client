<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Attribute;
use ArrowSphere\CatalogGraphQLClient\Types\Prices;
use ArrowSphere\CatalogGraphQLClient\Types\PromotionsPrice;
use PHPUnit\Framework\TestCase;

/**
 * Class PromotionsPriceTest
 */
class PromotionsPriceTest extends TestCase
{
    public function testFields(): void
    {
        $promotionsPrice = new PromotionsPrice([
            PromotionsPrice::PROMOTION_ID       => '123',
            PromotionsPrice::PRICES             => [],
            PromotionsPrice::VENDOR_SKU         => 'SKU-1',
            PromotionsPrice::MARKETPLACE        => 'FR',
            PromotionsPrice::NAME               => 'promo name',
            PromotionsPrice::DESCRIPTION        => 'promo description',
            PromotionsPrice::IS_AUTO_APPLICABLE => true,
            PromotionsPrice::START_DATE         => '2026-05-12',
            PromotionsPrice::END_DATE           => '2026-07-01',
            PromotionsPrice::PROMOTION_TYPE     => 'discount',
            PromotionsPrice::PRICING_TYPE       => 'percentage',
            PromotionsPrice::PRICING_VALUE      => 10.5,
            PromotionsPrice::MIN_QUANTITY       => 1,
            PromotionsPrice::MAX_QUANTITY       => 100,
            PromotionsPrice::CURRENCY           => 'EUR',
            PromotionsPrice::APPLICABLE_UNTIL   => '2026-06-30',
            PromotionsPrice::APPLICABLE_FOR     => 30,
            PromotionsPrice::CHECK_ELIGIBILITY  => false,
            PromotionsPrice::ATTRIBUTES         => [
                [],
            ],
        ]);

        self::assertEquals('123', $promotionsPrice->getPromotionId());
        self::assertInstanceOf(Prices::class, $promotionsPrice->getPrices());
        self::assertEquals('SKU-1', $promotionsPrice->getVendorSku());
        self::assertEquals('FR', $promotionsPrice->getMarketplace());
        self::assertEquals('promo name', $promotionsPrice->getName());
        self::assertEquals('promo description', $promotionsPrice->getDescription());
        self::assertTrue($promotionsPrice->getIsAutoApplicable());
        self::assertEquals('2026-05-12', $promotionsPrice->getStartDate());
        self::assertEquals('2026-07-01', $promotionsPrice->getEndDate());
        self::assertEquals('discount', $promotionsPrice->getPromotionType());
        self::assertEquals('percentage', $promotionsPrice->getPricingType());
        self::assertEquals(10.5, $promotionsPrice->getPricingValue());
        self::assertEquals(1, $promotionsPrice->getMinQuantity());
        self::assertEquals(100, $promotionsPrice->getMaxQuantity());
        self::assertEquals('EUR', $promotionsPrice->getCurrency());
        self::assertEquals('2026-06-30', $promotionsPrice->getApplicableUntil());
        self::assertEquals(30, $promotionsPrice->getApplicableFor());
        self::assertFalse($promotionsPrice->getCheckEligibility());
        self::assertIsArray($promotionsPrice->getAttributes());
        self::assertInstanceOf(Attribute::class, $promotionsPrice->getAttributes()[0]);

        $promotionsPrice
            ->setPromotionId('ABC')
            ->setPrices(new Prices([
                Prices::BUY    => '50',
                Prices::SELL   => '80',
                Prices::PUBLIC => '100',
            ]))
            ->setVendorSku('SKU-2')
            ->setMarketplace('FR')
            ->setName('new name')
            ->setDescription('new description')
            ->setIsAutoApplicable(false)
            ->setStartDate('2027-01-01')
            ->setEndDate('2027-12-31')
            ->setPromotionType('rebate')
            ->setPricingType('fixed')
            ->setPricingValue(25.0)
            ->setMinQuantity(5)
            ->setMaxQuantity(50)
            ->setCurrency('EUR')
            ->setApplicableUntil('2027-06-30')
            ->setApplicableFor(60)
            ->setCheckEligibility(true)
            ->setAttributes([
                new Attribute([
                    Attribute::NAME  => 'name B6',
                    Attribute::VALUE => 'value JH',
                ]),
            ])
        ;

        self::assertEquals('ABC', $promotionsPrice->getPromotionId());
        self::assertEquals('50', $promotionsPrice->getPrices()->getBuy());
        self::assertEquals('80', $promotionsPrice->getPrices()->getSell());
        self::assertEquals('100', $promotionsPrice->getPrices()->getPublic());
        self::assertEquals('SKU-2', $promotionsPrice->getVendorSku());
        self::assertEquals('FR', $promotionsPrice->getMarketplace());
        self::assertEquals('new name', $promotionsPrice->getName());
        self::assertEquals('new description', $promotionsPrice->getDescription());
        self::assertFalse($promotionsPrice->getIsAutoApplicable());
        self::assertEquals('2027-01-01', $promotionsPrice->getStartDate());
        self::assertEquals('2027-12-31', $promotionsPrice->getEndDate());
        self::assertEquals('rebate', $promotionsPrice->getPromotionType());
        self::assertEquals('fixed', $promotionsPrice->getPricingType());
        self::assertEquals(25.0, $promotionsPrice->getPricingValue());
        self::assertEquals(5, $promotionsPrice->getMinQuantity());
        self::assertEquals(50, $promotionsPrice->getMaxQuantity());
        self::assertEquals('EUR', $promotionsPrice->getCurrency());
        self::assertEquals('2027-06-30', $promotionsPrice->getApplicableUntil());
        self::assertEquals(60, $promotionsPrice->getApplicableFor());
        self::assertTrue($promotionsPrice->getCheckEligibility());
        self::assertEquals('name B6', $promotionsPrice->getAttributes()[0]->getName());
        self::assertEquals('value JH', $promotionsPrice->getAttributes()[0]->getValue());
    }
}
