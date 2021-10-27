<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use PHPUnit\Framework\TestCase;

class ResellerTest extends TestCase
{
    public function testFields(): void
    {
        $reseller = new Reseller([
            Reseller::XSP_REF => 'XSP42542',
        ]);

        self::assertSame('XSP42542', $reseller->getXspRef());
    }
}
