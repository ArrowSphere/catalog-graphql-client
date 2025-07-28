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
            Family::CLASSIFICATION => 'SAAS',
            Family::ARROW_SUB_CATEGORIES => ['nce', 'ibm']
        ]);

        self::assertSame('id', $family->getId());
        self::assertSame('name', $family->getName());
        self::assertSame('SAAS', $family->getClassification());
        self::assertSame(['nce', 'ibm'], $family->getArrowSubCategories());

        $family
            ->setId('my id')
            ->setName('my name')
            ->setClassification('my classification')
            ->setArrowSubCategories(['first', 'second'])
        ;

        self::assertSame('my id', $family->getId());
        self::assertSame('my name', $family->getName());
        self::assertSame('my classification', $family->getClassification());
        self::assertSame(['first', 'second'], $family->getArrowSubCategories());

        $family->setClassifications(['Classification 1', 'Classification 2']);

        self::assertSame(['Classification 1', 'Classification 2'], $family->getClassifications());

        $family2 = new Family([
            Family::ID   => 'id',
            Family::NAME => 'name',
            Family::CLASSIFICATION => 'SAAS',
            Family::CLASSIFICATIONS => ['SAAS', 'FTSL'],
            Family::ARROW_SUB_CATEGORIES => ['nce', 'ibm']
        ]);

        self::assertSame(['SAAS', 'FTSL'], $family2->getClassifications());
    }
}
