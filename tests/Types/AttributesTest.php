<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Attributes;
use PHPUnit\Framework\TestCase;

/**
 * Class AttributesTest
 */
class AttributesTest extends TestCase
{
    public function testFields(): void
    {
        $attributes = new Attributes([
            Attributes::CANCEL_SUBSCRIPTION     => true,
            Attributes::DECREASE_SEATS          => true,
            Attributes::INCREASE_SEATS          => true,
            Attributes::PART_IDENTIFIER         => 'part identifier',
            Attributes::PERIODICITY             => 720,
            Attributes::PLAN_ID                 => 'plan id',
            Attributes::PRODUCT_ID              => 'product id',
            Attributes::PRODUCT_SKU             => 'product sku',
            Attributes::REACTIVATE_SUBSCRIPTION => true,
            Attributes::SUSPEND_SUBSCRIPTION    => true,
            Attributes::TERM                    => 8640,
            Attributes::UNIT_TYPE               => 'unit type',
        ]);

        self::assertTrue($attributes->getCancelSubscription());
        self::assertTrue($attributes->getDecreaseSeats());
        self::assertTrue($attributes->getIncreaseSeats());
        self::assertSame('part identifier', $attributes->getPartIdentifier());
        self::assertSame(720, $attributes->getPeriodicity());
        self::assertSame('plan id', $attributes->getPlanId());
        self::assertSame('product id', $attributes->getProductId());
        self::assertSame('product sku', $attributes->getProductSku());
        self::assertTrue($attributes->getReactivateSubscription());
        self::assertTrue($attributes->getSuspendSubscription());
        self::assertSame(8640, $attributes->getTerm());
        self::assertSame('unit type', $attributes->getUnitType());
    }
}
