<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\DynamicAttributes;
use PHPUnit\Framework\TestCase;

/**
 * Class DynamicAttributesTest
 */
class DynamicAttributesTest extends TestCase
{
    /**
     * @throws NonExistingFieldException
     */
    public function testFields(): void
    {
        $dynamicAttributes = new DynamicAttributes([
            DynamicAttributes::CORES                       => '1',
            DynamicAttributes::DISK_SIZE                   => '2',
            DynamicAttributes::RAM                         => '3',
            DynamicAttributes::REGION                      => 'eu-west1',
            DynamicAttributes::VCPU                        => '4',
            DynamicAttributes::RESERVATIONS_AUTOFIT_GROUP  => 'test',
            DynamicAttributes::HAS_ACU                     => true
        ]);

        self::assertEquals('1', $dynamicAttributes->getCores());
        self::assertEquals('2', $dynamicAttributes->getDiskSize());
        self::assertEquals('3', $dynamicAttributes->getRam());
        self::assertEquals('eu-west1', $dynamicAttributes->getRegion());
        self::assertEquals('4', $dynamicAttributes->getVCpu());
        self::assertEquals('test', $dynamicAttributes->getReservationsAutofitGroup());
        self::assertTrue($dynamicAttributes->getHasAcu());
    }
}
