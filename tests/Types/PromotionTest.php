<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use ArrowSphere\CatalogGraphQLClient\Types\Promotion;
use PHPUnit\Framework\TestCase;

/**
 * Class PromotionTest
 */
class PromotionTest extends TestCase
{
    public function testFields(): void
    {
        $promotion = new Promotion([
            Promotion::PROMOTION_ID        => '39NFJQT1PFPK:0003:39NFJQT1Q5M6',
            Promotion::VENDOR_SKU          => 'CFQ7TTC0LH3J:0003',
            Promotion::NAME                => 'Dynamics 365 Customer Insights Attach',
            Promotion::DESCRIPTION         => 'New Commerce Launch Promotional Discount',
            Promotion::PRICING_VALUE       => 0.1667,
            Promotion::PRICING_TYPE        => 'discount',
            Promotion::MARKETPLACE         => 'FR',
            Promotion::START_DATE          => '2022-01-10T15:00:00.000Z',
            Promotion::END_DATE            => '2022-06-30T12:31:06.000Z',
            Promotion::IS_AUTO_APPLICABLE  => true,
            Promotion::MIN_QUANTITY        => null,
            Promotion::MAX_QUANTITY        => null,
            Promotion::BILLING          => [
                Billing::CYCLE => 720,
                Billing::TERM  => 8640,
                Billing::TYPE  => null,
            ],
        ]);

        self::assertEquals('39NFJQT1PFPK:0003:39NFJQT1Q5M6', $promotion->getPromotionId());
        self::assertEquals('CFQ7TTC0LH3J:0003', $promotion->getVendorSku());
        self::assertEquals('Dynamics 365 Customer Insights Attach', $promotion->getName());
        self::assertEquals('New Commerce Launch Promotional Discount', $promotion->getDescription());
        self::assertEquals(0.1667, $promotion->getPricingValue());
        self::assertEquals('discount', $promotion->getPricingType());
        self::assertEquals('FR', $promotion->getMarketplace());
        self::assertEquals('2022-01-10T15:00:00.000Z', $promotion->getStartDate());
        self::assertEquals('2022-06-30T12:31:06.000Z', $promotion->getEndDate());
        self::assertTrue($promotion->getIsAutoApplicable());
        self::assertNull($promotion->getMinQuantity());
        self::assertNull($promotion->getMaxQuantity());
        self::assertInstanceOf(Billing::class, $promotion->getBilling());
        self::assertEquals(720, $promotion->getBilling()->getCycle());
        self::assertEquals(8640, $promotion->getBilling()->getTerm());
        self::assertNull($promotion->getBilling()->getType());
    }
}
