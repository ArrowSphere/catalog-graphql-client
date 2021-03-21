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

        $attributes
            ->setCancelSubscription(false)
            ->setDecreaseSeats(false)
            ->setIncreaseSeats(false)
            ->setPartIdentifier('identifier part')
            ->setPeriodicity(1234)
            ->setPlanId('my planID')
            ->setProductId('my product id')
            ->setProductSku('my product sku')
            ->setReactivateSubscription(false)
            ->setSuspendSubscription(false)
            ->setTerm(1234)
            ->setUnitType('my unit type')
        ;

        self::assertFalse($attributes->getCancelSubscription());
        self::assertFalse($attributes->getDecreaseSeats());
        self::assertFalse($attributes->getIncreaseSeats());
        self::assertSame('identifier part', $attributes->getPartIdentifier());
        self::assertSame(1234, $attributes->getPeriodicity());
        self::assertSame('my planID', $attributes->getPlanId());
        self::assertSame('my product id', $attributes->getProductId());
        self::assertSame('my product sku', $attributes->getProductSku());
        self::assertFalse($attributes->getReactivateSubscription());
        self::assertFalse($attributes->getSuspendSubscription());
        self::assertSame(1234, $attributes->getTerm());
        self::assertSame('my unit type', $attributes->getUnitType());
    }
}
