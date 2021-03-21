<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Pagination;
use PHPUnit\Framework\TestCase;

/**
 * Class PaginationTest
 */
class PaginationTest extends TestCase
{
    public function testFields(): void
    {
        $pagination = new Pagination([
            Pagination::CURRENT_PAGE => 2,
            Pagination::PER_PAGE     => 25,
            Pagination::TOTAL        => 100,
            Pagination::TOTAL_PAGE   => 4,
        ]);

        self::assertSame(2, $pagination->getCurrentPage());
        self::assertSame(25, $pagination->getPerPage());
        self::assertSame(100, $pagination->getTotal());
        self::assertSame(4, $pagination->getTotalPage());

        $pagination
            ->setCurrentPage(3)
            ->setPerPage(50)
            ->setTotal(200)
            ->setTotalPage(8)
        ;

        self::assertSame(3, $pagination->getCurrentPage());
        self::assertSame(50, $pagination->getPerPage());
        self::assertSame(200, $pagination->getTotal());
        self::assertSame(8, $pagination->getTotalPage());
    }
}
