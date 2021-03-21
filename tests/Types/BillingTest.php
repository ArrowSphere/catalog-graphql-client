<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Billing;
use PHPUnit\Framework\TestCase;

/**
 * Class BillingTest
 */
class BillingTest extends TestCase
{
    public function testFields(): void
    {
        $billing = new Billing([
            Billing::CYCLE => 720,
            Billing::TERM  => 8640,
            Billing::TYPE  => 'type',
        ]);

        self::assertSame(720, $billing->getCycle());
        self::assertSame(8640, $billing->getTerm());
        self::assertSame('type', $billing->getType());

        $billing
            ->setTerm(124)
            ->setCycle(234)
            ->setType('my type')
        ;

        self::assertSame(234, $billing->getCycle());
        self::assertSame(124, $billing->getTerm());
        self::assertSame('my type', $billing->getType());
    }
}
