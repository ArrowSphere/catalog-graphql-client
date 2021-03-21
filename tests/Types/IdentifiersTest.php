<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier;
use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class IdentifiersTest
 */
class IdentifiersTest extends TestCase
{
    public function testFields(): void
    {
        $identifiers = new Identifiers([
            Identifiers::ARROWSPHERE => [],
            Identifiers::VENDOR => [],
        ]);

        self::assertInstanceOf(ArrowsphereIdentifier::class, $identifiers->getArrowsphere());
        self::assertInstanceOf(VendorIdentifier::class, $identifiers->getVendor());

        $identifiers
            ->setArrowsphere(new ArrowsphereIdentifier([]))
            ->setVendor(new VendorIdentifier([]))
        ;

        self::assertInstanceOf(ArrowsphereIdentifier::class, $identifiers->getArrowsphere());
        self::assertInstanceOf(VendorIdentifier::class, $identifiers->getVendor());
    }
}
