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
            DynamicAttributes::ACU                         => '160',
            DynamicAttributes::MARKET_SEGMENT              => 'academic',
            DynamicAttributes::VERSION                     => '16',
            DynamicAttributes::METRIC                      => 'by core'
        ]);

        self::assertEquals('2', $dynamicAttributes->getDiskSize());
        self::assertEquals('3', $dynamicAttributes->getRam());
        self::assertEquals('eu-west1', $dynamicAttributes->getRegion());
        self::assertEquals('4', $dynamicAttributes->getVCpu());
        self::assertEquals('test', $dynamicAttributes->getReservationsAutofitGroup());
        self::assertEquals('160', $dynamicAttributes->getAcu());
        self::assertEquals('academic', $dynamicAttributes->getMarketSegment());
        self::assertEquals('16', $dynamicAttributes->getVersion());
        self::assertEquals('by core', $dynamicAttributes->getMetric());

        $dynamicAttributes
            ->setDiskSize('3')
            ->setRam('4')
            ->setRegion('eu-west2')
            ->setVCpu('5')
            ->setReservationsAutofitGroup('test2')
            ->setAcu('240')
            ->setMarketSegment('governmental')
            ->setVersion('17')
            ->setMetric('by user')
        ;

        self::assertEquals('3', $dynamicAttributes->getDiskSize());
        self::assertEquals('4', $dynamicAttributes->getRam());
        self::assertEquals('eu-west2', $dynamicAttributes->getRegion());
        self::assertEquals('5', $dynamicAttributes->getVCpu());
        self::assertEquals('test2', $dynamicAttributes->getReservationsAutofitGroup());
        self::assertEquals('240', $dynamicAttributes->getAcu());
        self::assertEquals('governmental', $dynamicAttributes->getMarketSegment());
        self::assertEquals('17', $dynamicAttributes->getVersion());
        self::assertEquals('by user', $dynamicAttributes->getMetric());
    }
}
