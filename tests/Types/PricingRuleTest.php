<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use ArrowSphere\CatalogGraphQLClient\Types\PricingRule;
use PHPUnit\Framework\TestCase;

/**
 * Class PricingRulesTest
 */
class PricingRuleTest extends TestCase
{
    public function testFields(): void
    {
        $pricingRules = new PricingRule([
            PricingRule::TIER => 1,
            PricingRule::TYPE => 'rate',
            PricingRule::RATE_TYPE => 'uplift',
            PricingRule::VALUE => 0.085,
        ]);

        self::assertSame(1, $pricingRules->getTier());
        self::assertSame('rate', $pricingRules->getType());
        self::assertSame('uplift', $pricingRules->getRateType());
        self::assertSame(0.085, $pricingRules->getValue());

        $pricingRules
            ->setTier(3)
            ->setType('rate')
            ->setRateType('discount')
            ->setValue(-0.03)
        ;

        self::assertSame(3, $pricingRules->getTier());
        self::assertSame('rate', $pricingRules->getType());
        self::assertSame('discount', $pricingRules->getRateType());
        self::assertSame(-0.03, $pricingRules->getValue());
    }

    public function testRealData(): void
    {
        $data = [
            'tier' => 3,
            'type' => 'rate',
            'rateType' => 'uplift',
            'value' => 0.05,
        ];

        $pricingRules = new PricingRule($data);

        self::assertSame($data['tier'], $pricingRules->getTier());
        self::assertSame($data['type'], $pricingRules->getType());
        self::assertSame($data['rateType'], $pricingRules->getRateType());
        self::assertSame($data['value'], $pricingRules->getValue());
    }

    public function testRealJsonData(): void
    {
        $offerData = json_decode(file_get_contents(__DIR__ . '/../resources/offer.json'), true);
        $priceBand = new PriceBand($offerData['priceBand'][0]);

        $pricingRules = $priceBand->getPricingRules();

        self::assertCount(2, $pricingRules);

        self::assertSame(2, $pricingRules[0]->getTier());
        self::assertSame('rate', $pricingRules[0]->getType());
        self::assertSame('uplift', $pricingRules[0]->getRateType());
        self::assertSame(0.07, $pricingRules[0]->getValue());

        self::assertSame(3, $pricingRules[1]->getTier());
        self::assertSame('rate', $pricingRules[1]->getType());
        self::assertSame('discount', $pricingRules[1]->getRateType());
        self::assertSame(-0.03, $pricingRules[1]->getValue());
    }

    /**
     * A PricingRules with a fixedPrice type does not have a rateType.
     */
    public function testRealDataFixedPrice(): void
    {
        $data = [
            'tier' => 3,
            'type' => 'fixedPrice',
            'value' => 357.22,
        ];

        $pricingRules = new PricingRule($data);

        self::assertSame($data['tier'], $pricingRules->getTier());
        self::assertSame($data['type'], $pricingRules->getType());
        self::assertSame($data['value'], $pricingRules->getValue());

        $this->expectException(UnrequestedFieldException::class);
        $this->expectExceptionMessage(
            'Field rateType from type ArrowSphere\CatalogGraphQLClient\Types\PricingRule has not been requested'
        );
        $pricingRules->getRateType();
    }
}
