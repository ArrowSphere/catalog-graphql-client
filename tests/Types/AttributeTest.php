<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Attribute;
use PHPUnit\Framework\TestCase;

/**
 * Class AttributeTest
 */
class AttributeTest extends TestCase
{
    public function testFields(): void
    {
        $attribute = new Attribute([
            Attribute::NAME   => 'name 1',
            Attribute::VALUE  => 'value 1',
        ]);

        self::assertSame('name 1', $attribute->getName());
        self::assertSame('value 1', $attribute->getValue());

        $attribute
            ->setName('name 2')
            ->setValue('value 2')
        ;

        self::assertSame('name 2', $attribute->getName());
        self::assertSame('value 2', $attribute->getValue());
    }
}
