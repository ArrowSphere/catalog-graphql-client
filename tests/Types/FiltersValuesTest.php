<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\FiltersValues;
use PHPUnit\Framework\TestCase;

/**
 * Class FiltersValuesTest
 */
class FiltersValuesTest extends TestCase
{
    public function testFields(): void
    {
        $filtersValues = new FiltersValues([
            FiltersValues::COUNT => 12,
            FiltersValues::VALUE => 'value',
        ]);

        self::assertSame(12, $filtersValues->getCount());
        self::assertSame('value', $filtersValues->getValue());
    }
}
