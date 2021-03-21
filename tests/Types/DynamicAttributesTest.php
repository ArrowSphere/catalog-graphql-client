<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\DynamicAttributes;
use PHPUnit\Framework\TestCase;

/**
 * Class DynamicAttributesTest
 */
class DynamicAttributesTest extends TestCase
{
    public function testFields(): void
    {
        $dynamicAttributes = new DynamicAttributes([
            DynamicAttributes::DISK_SIZE                   => '2',
            DynamicAttributes::RAM                         => '3',
            DynamicAttributes::REGION                      => 'eu-west1',
            DynamicAttributes::VCPU                        => '4',
            DynamicAttributes::RESERVATIONS_AUTOFIT_GROUP  => 'test',
            DynamicAttributes::ACU                         => '160'
        ]);

        self::assertEquals('2', $dynamicAttributes->getDiskSize());
        self::assertEquals('3', $dynamicAttributes->getRam());
        self::assertEquals('eu-west1', $dynamicAttributes->getRegion());
        self::assertEquals('4', $dynamicAttributes->getVCpu());
        self::assertEquals('test', $dynamicAttributes->getReservationsAutofitGroup());
        self::assertEquals('160', $dynamicAttributes->getAcu());

        $dynamicAttributes
            ->setDiskSize('3')
            ->setRam('4')
            ->setRegion('eu-west2')
            ->setVCpu('5')
            ->setReservationsAutofitGroup('test2')
            ->setAcu('240')
        ;

        self::assertEquals('3', $dynamicAttributes->getDiskSize());
        self::assertEquals('4', $dynamicAttributes->getRam());
        self::assertEquals('eu-west2', $dynamicAttributes->getRegion());
        self::assertEquals('5', $dynamicAttributes->getVCpu());
        self::assertEquals('test2', $dynamicAttributes->getReservationsAutofitGroup());
        self::assertEquals('240', $dynamicAttributes->getAcu());
    }
}
