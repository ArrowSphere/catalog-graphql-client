<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\OfferLight;
use ArrowSphere\CatalogGraphQLClient\Types\OfferResellers;
use ArrowSphere\CatalogGraphQLClient\Types\Promotion;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductTest
 */
class OfferLightTest extends TestCase
{
    public function testFields(): void
    {
        $offer = new OfferLight([
            OfferLight::ARROW_CATEGORIES           => [
                'cat1',
                'cat2',
            ],
            OfferLight::ARROW_SUB_CATEGORIES       => [
                'subCat1',
                'subCat2',
            ],
            OfferLight::CLASSIFICATION             => 'classification',
            OfferLight::ENVIRONMENT_AVAILABILITY   => 'environment availability',
            OfferLight::HAS_ADDONS                 => true,
            OfferLight::IDENTIFIERS                => [],
            OfferLight::IS_ADDON                   => true,
            OfferLight::IS_ENABLED                 => true,
            OfferLight::IS_TRIAL                   => true,
            OfferLight::LAST_UPDATE                => '2021-01-01T00:00:00.000Z',
            OfferLight::NAME                       => 'name',
            OfferLight::RESELLERS                  => [],
            OfferLight::PROMOTIONS                 => [
                [
                    Promotion::PROMOTION_ID        => '39NFJQT1PFPK:0003:39NFJQT1Q5M6',
                    Promotion::VENDOR_SKU          => 'CFQ7TTC0LH3J:0003',
                    Promotion::NAME                => 'Dynamics 365 Customer Insights Attach',
                    Promotion::DESCRIPTION         => 'New Commerce Launch Promotional Discount',
                    Promotion::PRICING_VALUE       => 0.1667,
                    Promotion::PRICING_TYPE        => 'discount',
                    Promotion::MARKETPLACE         => 'FR',
                ],
            ],
        ]);

        self::assertIsArray($offer->getArrowCategories());
        self::assertSame([
            'cat1',
            'cat2',
        ], $offer->getArrowCategories());
        self::assertIsArray($offer->getArrowSubCategories());
        self::assertSame([
            'subCat1',
            'subCat2',
        ], $offer->getArrowSubCategories());
        self::assertSame('classification', $offer->getClassification());
        self::assertSame('environment availability', $offer->getEnvironmentAvailability());
        self::assertTrue($offer->getHasAddons());
        self::assertInstanceOf(Identifiers::class, $offer->getIdentifiers());
        self::assertTrue($offer->getIsAddon());
        self::assertTrue($offer->getIsEnabled());
        self::assertTrue($offer->getIsTrial());
        self::assertSame('2021-01-01T00:00:00.000Z', $offer->getLastUpdate());
        self::assertSame('name', $offer->getName());
        self::assertIsArray($offer->getPromotions());
        self::assertInstanceOf(Promotion::class, $offer->getPromotions()[0]);
        self::assertSame('39NFJQT1PFPK:0003:39NFJQT1Q5M6', $offer->getPromotions()[0]->getPromotionId());
        self::assertSame('CFQ7TTC0LH3J:0003', $offer->getPromotions()[0]->getVendorSku());

        $offer
            ->setIsEnabled(false)
            ->setName('lol')
            ->setClassification('FTSL')
            ->setIsAddon(true);

        self::assertFalse($offer->getIsEnabled());
        self::assertEquals('lol', $offer->getName());
        self::assertEquals('FTSL', $offer->getClassification());
        self::assertTrue($offer->getIsAddon());
        self::assertInstanceOf(OfferResellers::class, $offer->getResellers());
    }
}
