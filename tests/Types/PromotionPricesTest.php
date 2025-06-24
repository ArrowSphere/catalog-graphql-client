<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Prices;
use ArrowSphere\CatalogGraphQLClient\Types\PromotionPrices;
use PHPUnit\Framework\TestCase;

/**
 * Class PromotionPricesTest
 */
class PromotionPricesTest extends TestCase
{
    public function testFields(): void
    {
        $promotionPrices = new PromotionPrices([
            PromotionPrices::PROMOTION_ID => '123',
            PromotionPrices::PRICES => [],
        ]);

        self::assertEquals('123', $promotionPrices->getPromotionId());
        self::assertInstanceOf(Prices::class, $promotionPrices->getPrices());

        $promotionPrices
            ->setPromotionId('ABC')
            ->setPrices(new Prices([
            Prices::BUY => '50',
            Prices::SELL  => '80',
            Prices::PUBLIC  => '100',
            ]))
        ;

        self::assertEquals('ABC', $promotionPrices->getPromotionId());
        self::assertEquals('50', $promotionPrices->getPrices()->getBuy());
        self::assertEquals('80', $promotionPrices->getPrices()->getSell());
        self::assertEquals('100', $promotionPrices->getPrices()->getPublic());
    }
}
