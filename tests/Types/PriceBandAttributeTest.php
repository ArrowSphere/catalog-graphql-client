<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandAttribute;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandAttributeTest
 */
class PriceBandAttributeTest extends TestCase
{
    public function testFields(): void
    {
        $priceBandAttribute = new PriceBandAttribute([
            PriceBandAttribute::NAME  => 'ram',
            PriceBandAttribute::VALUE => '64',
        ]);

        self::assertSame('ram', $priceBandAttribute->getName());
        self::assertSame('64', $priceBandAttribute->getValue());

        $priceBandAttribute
            ->setName('cpu')
            ->setValue('8')
        ;

        self::assertSame('cpu', $priceBandAttribute->getName());
        self::assertSame('8', $priceBandAttribute->getValue());
    }
}
