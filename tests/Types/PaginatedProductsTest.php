<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Filters;
use ArrowSphere\CatalogGraphQLClient\Types\PaginatedProducts;
use ArrowSphere\CatalogGraphQLClient\Types\Pagination;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use PHPUnit\Framework\TestCase;

/**
 * Class PaginatedProductsTest
 */
class PaginatedProductsTest extends TestCase
{
    public function testFields(): void
    {
        $paginatedProducts = new PaginatedProducts([
            PaginatedProducts::FILTERS    => [
                [],
            ],
            PaginatedProducts::PAGINATION => [],
            PaginatedProducts::PRODUCTS   => [
                [],
            ],
            PaginatedProducts::TOP_OFFERS => [
                [],
            ],
        ]);

        self::assertIsArray($paginatedProducts->getFilters());
        self::assertInstanceOf(Filters::class, $paginatedProducts->getFilters()[0]);
        self::assertInstanceOf(Pagination::class, $paginatedProducts->getPagination());
        self::assertIsArray($paginatedProducts->getProducts());
        self::assertInstanceOf(Product::class, $paginatedProducts->getProducts()[0]);
        self::assertIsArray($paginatedProducts->getTopOffers());
        self::assertInstanceOf(Product::class, $paginatedProducts->getTopOffers()[0]);
    }
}
