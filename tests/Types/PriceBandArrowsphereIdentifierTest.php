<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandArrowsphereIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandArrowsphereIdentifierTest
 */
class PriceBandArrowsphereIdentifierTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandArrowsphereIdentifier = new PriceBandArrowsphereIdentifier([
            PriceBandArrowsphereIdentifier::SKU => 'sku',
        ]);

        self::assertSame('sku', $priceBandArrowsphereIdentifier->getSku());
    }
}
