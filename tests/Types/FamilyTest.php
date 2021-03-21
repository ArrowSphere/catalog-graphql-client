<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Family;
use PHPUnit\Framework\TestCase;

/**
 * Class FamilyTest
 */
class FamilyTest extends TestCase
{
    public function testFields(): void
    {
        $family = new Family([
            Family::ID   => 'id',
            Family::NAME => 'name',
        ]);

        self::assertSame('id', $family->getId());
        self::assertSame('name', $family->getName());

        $family
            ->setId('my id')
            ->setName('my name')
        ;

        self::assertSame('my id', $family->getId());
        self::assertSame('my name', $family->getName());
    }
}
