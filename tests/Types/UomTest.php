<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Uom;
use PHPUnit\Framework\TestCase;

/**
 * Class UomTest
 */
class UomTest extends TestCase
{
    public function testFields(): void
    {
        $uom = new Uom([
            Uom::QUANTITY => 1,
            Uom::TYPE     => 'SEAT',
        ]);

        self::assertSame('SEAT', $uom->getType());
        self::assertSame(1, $uom->getQuantity());
    }
}
