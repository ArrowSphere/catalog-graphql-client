<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Prices;
use PHPUnit\Framework\TestCase;

/**
 * Class PricesTest
 */
class PricesTest extends TestCase
{
    public function testFields(): void
    {
        $prices = new Prices([
            Prices::BUY    => '10.5',
            Prices::PUBLIC => '12.5',
            Prices::SELL   => '11.5',
        ]);

        self::assertSame('10.5', $prices->getBuy());
        self::assertSame('12.5', $prices->getPublic());
        self::assertSame('11.5', $prices->getSell());
    }
}
