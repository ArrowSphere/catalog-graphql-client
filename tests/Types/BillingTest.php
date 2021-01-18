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
            Billing::TERM  => 8640,
            Billing::CYCLE => 720,
            Billing::TYPE  => 'type',
        ]);

        self::assertSame(8640, $billing->getTerm());
        self::assertSame(720, $billing->getCycle());
        self::assertSame('type', $billing->getType());
    }
}
