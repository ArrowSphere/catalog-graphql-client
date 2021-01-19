<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ErpIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class ErpIdentifierTest
 */
class ErpIdentifierTest extends TestCase
{
    public function testFields(): void
    {
        $erpIdentifier = new ErpIdentifier([
            ErpIdentifier::SKU => 'sku',
        ]);

        self::assertSame('sku', $erpIdentifier->getSku());
    }
}
