<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\SaleConstraints;
use PHPUnit\Framework\TestCase;

/**
 * Class SaleConstraintsTest
 */
class SaleConstraintsTest extends TestCase
{
    public function testFields(): void
    {
        $saleConstraints = new SaleConstraints([
            SaleConstraints::CUSTOMER_QUALIFICATIONS       => [
                'cust1',
                'cust2',
            ],
            SaleConstraints::MAX_QUANTITY                  => 123,
            SaleConstraints::MAX_SUBSCRIPTION_CONSTRAINT   => 'max subscription constraint',
            SaleConstraints::MAX_SUBSCRIPTION_PER_CUSTOMER => 12,
            SaleConstraints::MIN_QUANTITY                  => 3,
            SaleConstraints::REQUIRED_ATTRIBUTES           => [
                'attr1',
                'attr2',
            ],
            SaleConstraints::RESELLER_QUALIFICATIONS       => [
                'res1',
                'res2',
            ],
            SaleConstraints::SALE_GROUP                    => 'sale group',
        ]);

        self::assertIsArray($saleConstraints->getCustomerQualifications());
        self::assertSame([
            'cust1',
            'cust2',
        ], $saleConstraints->getCustomerQualifications());
        self::assertSame(123, $saleConstraints->getMaxQuantity());
        self::assertSame('max subscription constraint', $saleConstraints->getMaxSubscriptionConstraint());
        self::assertSame(12, $saleConstraints->getMaxSubscriptionPerCustomer());
        self::assertSame(3, $saleConstraints->getMinQuantity());
        self::assertIsArray($saleConstraints->getRequiredAttributes());
        self::assertSame([
            'attr1',
            'attr2',
        ], $saleConstraints->getRequiredAttributes());
        self::assertIsArray($saleConstraints->getResellerQualifications());
        self::assertSame([
            'res1',
            'res2',
        ], $saleConstraints->getResellerQualifications());
        self::assertSame('sale group', $saleConstraints->getSaleGroup());

        $saleConstraints
            ->setMinQuantity(1)
            ->setMaxQuantity(3)
            ->setMaxSubscriptionPerCustomer(1)
            ->setMaxSubscriptionConstraint('my max subscription constraint')
            ->setSaleGroup('my sale group')
        ;

        self::assertSame(3, $saleConstraints->getMaxQuantity());
        self::assertSame('my max subscription constraint', $saleConstraints->getMaxSubscriptionConstraint());
        self::assertSame(1, $saleConstraints->getMaxSubscriptionPerCustomer());
        self::assertSame(1, $saleConstraints->getMinQuantity());
    }
}
