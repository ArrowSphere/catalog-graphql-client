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

        $product = new Product([
            Product::ACTION_FLAGS               => [],
            Product::ADDON_PRIMARIES            => [
                [],
            ],
            Product::ARROW_CATEGORIES           => [
                'cat1',
                'cat2',
            ],
            Product::ASSETS                     => [],
            Product::BASE_OFFER_PRIMARIES       => [
                [],
            ],
            Product::CLASSIFICATION             => 'classification',
            Product::CONVERSION_OFFER_PRIMARIES => [
                [],
            ],
            Product::END_CUSTOMER_EULA          => 'end customer eula',
            Product::END_CUSTOMER_FEATURES      => 'end customer features',
            Product::END_CUSTOMER_REQUIREMENTS  => 'end customer requirements',
            Product::ENVIRONMENT_AVAILABILITY   => 'environment availability',
            Product::EULA                       => 'eula',
            Product::FAMILY                     => [],
            Product::HAS_ADDONS                 => true,
            Product::ID                         => 'id',
            Product::IDENTIFIERS                => [],
            Product::IS_ADDON                   => true,
            Product::IS_ENABLED                 => true,
            Product::IS_TRIAL                   => true,
            Product::LAST_UPDATE                => '2021-01-01T00:00:00.000Z',
            Product::LICENSE_AGREEMENT_TYPE     => 'license agreement type',
            Product::MARKETING_TEXT             => [],
            Product::MARKETPLACE                => 'marketplace',
            Product::NAME                       => 'name',
            Product::PRICE_BAND                 => [
                [],
            ],
            Product::PROGRAM                    => [],
            Product::SALE_CONSTRAINTS           => [],
            Product::SERVICE_DESCRIPTION        => 'service description',
            Product::VENDOR                     => [],
            Product::VENDOR_OFFER_URL           => 'vendor offer url',
            Product::WEIGHT_FORCED              => 56.78,
            Product::WEIGHT_TOP_SALES           => 12.34,
            Product::XSP_URL                    => 'xsp url',
            Product::RELATED_OFFERS             => [
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

        $paginatedProducts
            ->setFilters([new Filters([Filters::NAME  => 'name', Filters::VALUES => [[]]])])
            ->setPagination(new Pagination([
                Pagination::CURRENT_PAGE => 2,
                Pagination::PER_PAGE     => 25,
                Pagination::TOTAL        => 100,
                Pagination::TOTAL_PAGE   => 4,
            ]))
            ->setProducts([$product])
            ->setTopOffers([$product])
        ;

        self::assertIsArray($paginatedProducts->getFilters());
        self::assertInstanceOf(Filters::class, $paginatedProducts->getFilters()[0]);
        self::assertEquals('name', $paginatedProducts->getFilters()[0]->getName());
        self::assertInstanceOf(Pagination::class, $paginatedProducts->getPagination());
        self::assertEquals(100, $paginatedProducts->getPagination()->getTotal());
        self::assertIsArray($paginatedProducts->getProducts());
        self::assertInstanceOf(Product::class, $paginatedProducts->getProducts()[0]);
        self::assertEquals('name', $paginatedProducts->getProducts()[0]->getName());
        self::assertIsArray($paginatedProducts->getTopOffers());
        self::assertInstanceOf(Product::class, $paginatedProducts->getTopOffers()[0]);
        self::assertEquals('name', $paginatedProducts->getTopOffers()[0]->getName());
    }
}
