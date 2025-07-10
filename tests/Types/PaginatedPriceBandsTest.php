<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Family;
use ArrowSphere\CatalogGraphQLClient\Types\Filters;
use ArrowSphere\CatalogGraphQLClient\Types\PaginatedPriceBands;
use ArrowSphere\CatalogGraphQLClient\Types\Pagination;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use PHPUnit\Framework\TestCase;

/**
 * Class PaginatedPriceBandsTest
 */
class PaginatedPriceBandsTest extends TestCase
{
    public function testFields(): void
    {
        $paginatedPriceBands = new PaginatedPriceBands([
            PaginatedPriceBands::FILTERS     => [
                [],
            ],
            PaginatedPriceBands::PAGINATION  => [],
            PaginatedPriceBands::PRICE_BANDS => [
                [],
            ],
            PaginatedPriceBands::FAMILIES    => [
                [],
            ],
        ]);

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
            PriceBand::PROMOTION_PRICES  => [],
            PriceBand::OFFER             => [],
            PriceBand::VENDOR            => [],
            PriceBand::PROGRAM           => [],
        ]);

        $family = new Family([
            Family::ID   => 'id',
            Family::NAME => 'name',
            Family::CLASSIFICATION => 'SAAS',
            Family::ARROW_SUB_CATEGORIES => ['nce', 'ibm']
        ]);

        self::assertIsArray($paginatedPriceBands->getFilters());
        self::assertInstanceOf(Filters::class, $paginatedPriceBands->getFilters()[0]);
        self::assertInstanceOf(Pagination::class, $paginatedPriceBands->getPagination());
        self::assertIsArray($paginatedPriceBands->getPriceBands());
        self::assertInstanceOf(PriceBand::class, $paginatedPriceBands->getPriceBands()[0]);
        self::assertIsArray($paginatedPriceBands->getFamilies());
        self::assertInstanceOf(Family::class, $paginatedPriceBands->getFamilies()[0]);

        $paginatedPriceBands
            ->setFilters([new Filters([Filters::NAME  => 'name', Filters::VALUES => [[]]])])
            ->setPagination(new Pagination([
                Pagination::CURRENT_PAGE => 2,
                Pagination::PER_PAGE     => 25,
                Pagination::TOTAL        => 100,
                Pagination::TOTAL_PAGE   => 4,
            ]))
            ->setPriceBands([$priceBand])
            ->setFamilies([$family])
        ;

        self::assertIsArray($paginatedPriceBands->getFilters());
        self::assertInstanceOf(Filters::class, $paginatedPriceBands->getFilters()[0]);
        self::assertEquals('name', $paginatedPriceBands->getFilters()[0]->getName());
        self::assertInstanceOf(Pagination::class, $paginatedPriceBands->getPagination());
        self::assertEquals(100, $paginatedPriceBands->getPagination()->getTotal());
        self::assertIsArray($paginatedPriceBands->getPriceBands());
        self::assertInstanceOf(PriceBand::class, $paginatedPriceBands->getPriceBands()[0]);
        self::assertEquals('USD', $paginatedPriceBands->getPriceBands()[0]->getCurrency());
        self::assertIsArray($paginatedPriceBands->getFamilies());
        self::assertInstanceOf(Family::class, $paginatedPriceBands->getFamilies()[0]);
        self::assertEquals('name', $paginatedPriceBands->getFamilies()[0]->getName());
    }
}
