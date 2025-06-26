<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\AttributesParameters;
use PHPUnit\Framework\TestCase;

/**
 * Class AttributesParametersTest
 */
class AttributesParametersTest extends TestCase
{
    public function testFields(): void
    {
        $attributes = new AttributesParameters([
            AttributesParameters::TYPE   => 'INTERNAL',
            AttributesParameters::POSITION   =>  1,
            AttributesParameters::NAME   => 'test',
            AttributesParameters::LABEL   => 'test label',
        ]);

        self::assertSame(1, $attributes->getPosition());
        self::assertSame('test label', $attributes->getLabel());
        self::assertSame('test', $attributes->getName());
        self::assertSame('INTERNAL', $attributes->getType());

        $attributes
            ->setPosition(2)
            ->setLabel('new label')
            ->setName('new name')
            ->setType('EXTERNAL');

        self::assertSame(2, $attributes->getPosition());
        self::assertSame('new label', $attributes->getLabel());
        self::assertSame('new name', $attributes->getName());
        self::assertSame('EXTERNAL', $attributes->getType());
    }
}
