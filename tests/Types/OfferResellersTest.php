<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use PHPUnit\Framework\TestCase;

class OfferResellersTest extends TestCase
{
    public function testFields(): void
    {
        $offerResellers = new OfferResellers([
            OfferResellers::OWNER   => [],
            OfferResellers::VIEWERS => [
                []
            ],
        ]);

        self::assertInstanceOf(Reseller::class, $offerResellers->getOwner());
        self::assertIsArray($offerResellers->getViewers());
        self::assertInstanceOf(Reseller::class, $offerResellers->getViewers()[0]);
    }
}
