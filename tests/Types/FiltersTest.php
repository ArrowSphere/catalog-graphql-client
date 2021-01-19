<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Filters;
use ArrowSphere\CatalogGraphQLClient\Types\FiltersValues;
use PHPUnit\Framework\TestCase;

/**
 * Class FiltersTest
 */
class FiltersTest extends TestCase
{
    public function testFields(): void
    {
        $filters = new Filters([
            Filters::NAME  => 'name',
            Filters::VALUE => [
                [],
            ],
        ]);

        self::assertSame('name', $filters->getName());
        self::assertIsArray($filters->getValue());
        self::assertInstanceOf(FiltersValues::class, $filters->getValue()[0]);
    }
}
