<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\RelatedOffer;
use PHPUnit\Framework\TestCase;

/**
 * Class RelatedOfferTest
 */
class RelatedOfferTest extends TestCase
{
    public function testFields(): void
    {
        $relatedOffer = new RelatedOffer([
            RelatedOffer::SKU    => 'sku',
            RelatedOffer::VENDOR => 'vendor',
        ]);

        self::assertSame('sku', $relatedOffer->getSku());
        self::assertSame('vendor', $relatedOffer->getVendor());
    }
}
