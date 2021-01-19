<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandActionFlags;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandActionFlagsTest
 */
class PriceBandActionFlagsTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandActionFlags = new PriceBandActionFlags([
            PriceBandActionFlags::CAN_BE_CANCELLED   => true,
            PriceBandActionFlags::CAN_BE_REACTIVATED => true,
            PriceBandActionFlags::CAN_BE_SUSPENDED   => true,
            PriceBandActionFlags::CAN_DECREASE_SEATS => true,
            PriceBandActionFlags::CAN_INCREASE_SEATS => true,
        ]);

        self::assertTrue($priceBandActionFlags->getCanBeCancelled());
        self::assertTrue($priceBandActionFlags->getCanBeReactivated());
        self::assertTrue($priceBandActionFlags->getCanBeSuspended());
        self::assertTrue($priceBandActionFlags->getCanDecreaseSeats());
        self::assertTrue($priceBandActionFlags->getCanIncreaseSeats());
    }
}
