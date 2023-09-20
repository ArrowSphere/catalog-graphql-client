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
            Prices::TRANSFER_PRICE => '10.5',
        ]);

        self::assertSame('10.5', $prices->getBuy());
        self::assertSame('12.5', $prices->getPublic());
        self::assertSame('11.5', $prices->getSell());
        self::assertSame('10.5', $prices->getTransferPrice());

        $prices
            ->setBuy('1')
            ->setPublic('2')
            ->setSell('3')
            ->setTransferPrice('4')
        ;

        self::assertSame('1', $prices->getBuy());
        self::assertSame('2', $prices->getPublic());
        self::assertSame('3', $prices->getSell());
        self::assertSame('4', $prices->getTransferPrice());
    }
}
