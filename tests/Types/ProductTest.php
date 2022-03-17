<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ActionFlags;
use ArrowSphere\CatalogGraphQLClient\Types\Assets;
use ArrowSphere\CatalogGraphQLClient\Types\AttributesParameters;
use ArrowSphere\CatalogGraphQLClient\Types\Family;
use ArrowSphere\CatalogGraphQLClient\Types\Identifiers;
use ArrowSphere\CatalogGraphQLClient\Types\MarketingText;
use ArrowSphere\CatalogGraphQLClient\Types\OfferResellers;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use ArrowSphere\CatalogGraphQLClient\Types\Program;
use ArrowSphere\CatalogGraphQLClient\Types\Promotion;
use ArrowSphere\CatalogGraphQLClient\Types\RelatedOffer;
use ArrowSphere\CatalogGraphQLClient\Types\SaleConstraints;
use ArrowSphere\CatalogGraphQLClient\Types\Vendor;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductTest
 */
class ProductTest extends TestCase
{
    public function testFields(): void
    {
        $product = new Product([
            Product::ACTION_FLAGS               => [],
            Product::ADDON_PRIMARIES            => [
                [],
            ],
            Product::ARROW_CATEGORIES           => [
                'cat1',
                'cat2',
            ],
            Product::ARROW_SUB_CATEGORIES       => [
                'subCat1',
                'subCat2',
            ],
            Product::ASSETS                     => [],
            Product::BASE_OFFER_PRIMARIES       => [
                [],
            ],
            Product::CLASSIFICATION             => 'classification',
            Product::CONVERSION_OFFER_PRIMARIES => [
                [],
            ],
            Product::END_CUSTOMER_EULA          => 'end customer eula',
            Product::END_CUSTOMER_FEATURES      => 'end customer features',
            Product::END_CUSTOMER_REQUIREMENTS  => 'end customer requirements',
            Product::ENVIRONMENT_AVAILABILITY   => 'environment availability',
            Product::EULA                       => 'eula',
            Product::FAMILY                     => [],
            Product::HAS_ADDONS                 => true,
            Product::ID                         => 'id',
            Product::IDENTIFIERS                => [],
            Product::IS_ADDON                   => true,
            Product::IS_ENABLED                 => true,
            Product::IS_TRIAL                   => true,
            Product::LAST_UPDATE                => '2021-01-01T00:00:00.000Z',
            Product::LICENSE_AGREEMENT_TYPE     => 'license agreement type',
            Product::MARKETING_TEXT             => [],
            Product::MARKETPLACE                => 'marketplace',
            Product::NAME                       => 'name',
            Product::PRICE_BAND                 => [
                [],
            ],
            Product::DEFAULT_PRICE_BAND         => [],
            Product::PROGRAM                    => [],
            Product::SALE_CONSTRAINTS           => [],
            Product::SERVICE_DESCRIPTION        => 'service description',
            Product::VENDOR                     => [],
            Product::VENDOR_OFFER_URL           => 'vendor offer url',
            Product::WEIGHT_FORCED              => 56.78,
            Product::WEIGHT_TOP_SALES           => 12.34,
            Product::XSP_URL                    => 'xsp url',
            Product::RELATED_OFFERS             => [
                [],
            ],
            Product::IS_INDEPENDANT_ADDON       => true,
            Product::IS_INDIRECT_BUSINESS       => true,
            Product::RESELLERS                  => [],
            Product::PROMOTIONS                 => [
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
            Product::ATTRIBUTES_PARAMETERS          => [
                [
                    AttributesParameters::NAME       => 'vCpu',
                    AttributesParameters::LABEL      => 'Virtual Cpu',
                    AttributesParameters::POSITION      => 1,
                ],
            ],
        ]);

        self::assertInstanceOf(ActionFlags::class, $product->getActionFlags());
        self::assertIsArray($product->getAddonPrimaries());
        self::assertInstanceOf(Identifiers::class, $product->getAddonPrimaries()[0]);
        self::assertIsArray($product->getArrowCategories());
        self::assertSame([
            'cat1',
            'cat2',
        ], $product->getArrowCategories());
        self::assertIsArray($product->getArrowSubCategories());
        self::assertSame([
            'subCat1',
            'subCat2',
        ], $product->getArrowSubCategories());
        self::assertInstanceOf(Assets::class, $product->getAssets());
        self::assertIsArray($product->getBaseOfferPrimaries());
        self::assertInstanceOf(Identifiers::class, $product->getBaseOfferPrimaries()[0]);
        self::assertSame('classification', $product->getClassification());
        self::assertIsArray($product->getConversionOfferPrimaries());
        self::assertInstanceOf(Identifiers::class, $product->getConversionOfferPrimaries()[0]);
        self::assertSame('end customer eula', $product->getEndCustomerEula());
        self::assertSame('end customer features', $product->getEndCustomerFeatures());
        self::assertSame('end customer requirements', $product->getEndCustomerRequirements());
        self::assertSame('environment availability', $product->getEnvironmentAvailability());
        self::assertSame('eula', $product->getEula());
        self::assertInstanceOf(Family::class, $product->getFamily());
        self::assertTrue($product->getHasAddons());
        self::assertSame('id', $product->getId());
        self::assertInstanceOf(Identifiers::class, $product->getIdentifiers());
        self::assertTrue($product->getIsAddon());
        self::assertTrue($product->getIsEnabled());
        self::assertTrue($product->getIsTrial());
        self::assertSame('2021-01-01T00:00:00.000Z', $product->getLastUpdate());
        self::assertSame('license agreement type', $product->getLicenseAgreementType());
        self::assertInstanceOf(MarketingText::class, $product->getMarketingText());
        self::assertSame('marketplace', $product->getMarketplace());
        self::assertSame('name', $product->getName());
        self::assertIsArray($product->getPriceBand());
        self::assertInstanceOf(PriceBand::class, $product->getPriceBand()[0]);
        self::assertInstanceOf(PriceBand::class, $product->getDefaultPriceBand());
        self::assertInstanceOf(Program::class, $product->getProgram());
        self::assertInstanceOf(SaleConstraints::class, $product->getSaleConstraints());
        self::assertSame('service description', $product->getServiceDescription());
        self::assertInstanceof(Vendor::class, $product->getVendor());
        self::assertSame('vendor offer url', $product->getVendorOfferUrl());
        self::assertSame(56.78, $product->getWeightForced());
        self::assertSame(12.34, $product->getWeightTopSales());
        self::assertSame('xsp url', $product->getXspUrl());
        self::assertIsArray($product->getRelatedOffers());
        self::assertInstanceOf(RelatedOffer::class, $product->getRelatedOffers()[0]);
        self::assertIsArray($product->getPromotions());
        self::assertInstanceOf(Promotion::class, $product->getPromotions()[0]);
        self::assertSame('39NFJQT1PFPK:0003:39NFJQT1Q5M6', $product->getPromotions()[0]->getPromotionId());
        self::assertSame('CFQ7TTC0LH3J:0003', $product->getPromotions()[0]->getVendorSku());
        self::assertIsArray($product->getAttributesParameters());
        self::assertInstanceOf(AttributesParameters::class, $product->getAttributesParameters()[0]);
        self::assertSame('vCpu', $product->getAttributesParameters()[0]->getName());
        self::assertSame('Virtual Cpu', $product->getAttributesParameters()[0]->getLabel());
        self::assertSame(1, $product->getAttributesParameters()[0]->getPosition());

        $product
            ->setIsEnabled(false)
            ->setName('lol')
            ->setId('my id')
            ->setClassification('FTSL')
            ->setMarketplace('FR')
            ->setIsAddon(true);

        self::assertFalse($product->getIsEnabled());
        self::assertEquals('lol', $product->getName());
        self::assertEquals('my id', $product->getId());
        self::assertEquals('FTSL', $product->getClassification());
        self::assertEquals('FR', $product->getMarketplace());
        self::assertTrue($product->getIsAddon());
        self::assertTrue($product->getIsIndependantAddon());
        self::assertTrue($product->getIsIndirectBusiness());
        self::assertInstanceOf(OfferResellers::class, $product->getResellers());
    }
}
