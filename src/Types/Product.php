<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Product
 *
 * @method string getId()
 * @method Identifiers getIdentifiers()
 * @method string getName()
 * @method string getClassification()
 * @method string[] getArrowCategories()
 * @method string getLicenseAgreementType()
 * @method Family getFamily()
 * @method bool getIsAddon()
 * @method bool getHasAddons()
 * @method ActionFlags getActionFlags()
 * @method Identifiers[] getAddonPrimaries()
 * @method Identifiers[] getConversionOfferPrimaries()
 * @method Identifiers[] getBaseOfferPrimaries()
 * @method Assets getAssets()
 * @method string getEnvironmentAvailability()
 * @method string getMarketplace()
 * @method bool getIsEnabled()
 * @method bool getIsTrial()
 * @method string getLastUpdate()
 * @method MarketingText getMarketingText()
 * @method string getVendorOfferUrl()
 * @method string getServiceDescription()
 * @method string getEula()
 * @method string getEndCustomerEula()
 * @method string getEndCustomerRequirements()
 * @method string getEndCustomerFeatures()
 * @method string getXspUrl()
 * @method SaleConstraints getSaleConstraints()
 * @method Vendor getVendor()
 * @method Program getProgram()
 * @method float getWeightTopSales()
 * @method float getWeightForced()
 * @method PriceBand[] getPriceBand()
 * @method PriceBand getDefaultPriceBand()
 * @method RelatedOffer[] getRelatedOffers()
 * @method string[] getArrowSubCategories()
 * @method bool getIsIndependantAddon()
 * @method bool getIsIndirectBusiness()
 * @method OfferResellers getResellers()
 * @method Promotion[] getPromotions()
 * @method AttributesParameters[] getAttributesParameters()
 * @method Product setId(string $id)
 * @method Product setIdentifiers(Identifiers $identifiers)
 * @method Product setName(string $name)
 * @method Product setClassification(string $classification)
 * @method Product setArrowCategories(string[] $arrowCategories)
 * @method Product setLicenseAgreementType(string $licenseAgreementType)
 * @method Product setFamily(Family $family)
 * @method Product setIsAddon(bool $isAddon)
 * @method Product setHasAddons(bool $hasAddons)
 * @method Product setActionFlags(ActionFlags $actionFlags)
 * @method Product setAddonPrimaries(Identifiers[] $addonPrimaries)
 * @method Product setConversionOfferPrimaries(Identifiers[] $conversionOfferPrimaries)
 * @method Product setBaseOfferPrimaries(Identifiers[] $baseOfferPrimaries)
 * @method Product setAssets(Assets $assets)
 * @method Product setEnvironmentAvailability(string $environmentAvailability)
 * @method Product setMarketplace(string $marketplace)
 * @method Product setIsEnabled(bool $isEnabled)
 * @method Product setIsTrial(bool $isTrial)
 * @method Product setLastUpdate(string $lastUpdate)
 * @method Product setMarketingText(MarketingText $marketingText)
 * @method Product setVendorOfferUrl(string $vendorOfferUrl)
 * @method Product setServiceDescription(string $serviceDescription)
 * @method Product setEula(string $eula)
 * @method Product setEndCustomerEula(string $endCustomerEula)
 * @method Product setEndCustomerRequirements(string $endCustomerRequirements)
 * @method Product setEndCustomerFeatures(string $endCustomerFeatures)
 * @method Product setXspUrl(string $xspUrl)
 * @method Product setSaleConstraints(SaleConstraints $saleConstraints)
 * @method Product setVendor(Vendor $vendor)
 * @method Product setProgram(Program $program)
 * @method Product setWeightTopSales(float $weightTopSales)
 * @method Product setWeightForced(float $weightForced)
 * @method Product setPriceBand(PriceBand[] $priceBand)
 * @method Product setDefaultPriceBand(PriceBand $defaultPriceBand)
 * @method Product setRelatedOffers(RelatedOffer[] $relatedOffers)
 * @method Product setArrowSubCategories(string[] $arrowSubCategories)
 * @method Product setIsIndependantAddon(bool $isIndependantAddon)
 * @method Product setIsIndirectBusiness(bool $isIndirectBusiness)
 * @method Product setResellers(OfferResellers $offerResellers)
 * @method Product setPromotions(Promotion[] $promotions)
 * @method Product setAttributesParameters(AttributesParameters[] $attributesParameters)
 */
class Product extends AbstractType
{
    public const ID = 'id';

    public const IDENTIFIERS = 'identifiers';

    public const NAME = 'name';

    public const CLASSIFICATION = 'classification';

    public const ARROW_CATEGORIES = 'arrowCategories';

    public const LICENSE_AGREEMENT_TYPE = 'licenseAgreementType';

    public const FAMILY = 'family';

    public const IS_ADDON = 'isAddon';

    public const HAS_ADDONS = 'hasAddons';

    public const ACTION_FLAGS = 'actionFlags';

    public const ADDON_PRIMARIES = 'addonPrimaries';

    public const CONVERSION_OFFER_PRIMARIES = 'conversionOfferPrimaries';

    public const BASE_OFFER_PRIMARIES = 'baseOfferPrimaries';

    public const ASSETS = 'assets';

    public const ENVIRONMENT_AVAILABILITY = 'environmentAvailability';

    public const MARKETPLACE = 'marketplace';

    public const IS_ENABLED = 'isEnabled';

    public const IS_TRIAL = 'isTrial';

    public const LAST_UPDATE = 'lastUpdate';

    public const MARKETING_TEXT = 'marketingText';

    public const VENDOR_OFFER_URL = 'vendorOfferUrl';

    public const SERVICE_DESCRIPTION = 'serviceDescription';

    public const EULA = 'eula';

    public const END_CUSTOMER_EULA = 'endCustomerEula';

    public const END_CUSTOMER_REQUIREMENTS = 'endCustomerRequirements';

    public const END_CUSTOMER_FEATURES = 'endCustomerFeatures';

    public const XSP_URL = 'xspUrl';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const VENDOR = 'vendor';

    public const PROGRAM = 'program';

    public const WEIGHT_TOP_SALES = 'weightTopSales';

    public const WEIGHT_FORCED = 'weightForced';

    public const PRICE_BAND = 'priceBand';

    public const DEFAULT_PRICE_BAND = 'defaultPriceBand';

    public const RELATED_OFFERS = 'relatedOffers';

    public const ARROW_SUB_CATEGORIES = 'arrowSubCategories';

    public const IS_INDEPENDANT_ADDON = 'isIndependantAddon';

    public const IS_INDIRECT_BUSINESS = 'isIndirectBusiness';

    public const RESELLERS = 'resellers';

    public const PROMOTIONS = 'promotions';

    public const ATTRIBUTES_PARAMETERS = 'attributesParameters';

    protected const MAPPING = [
        self::ID                         => self::TYPE_STRING,
        self::IDENTIFIERS                => Identifiers::class,
        self::NAME                       => self::TYPE_STRING,
        self::CLASSIFICATION             => self::TYPE_STRING,
        self::ARROW_SUB_CATEGORIES => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::ARROW_CATEGORIES           => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::LICENSE_AGREEMENT_TYPE     => self::TYPE_STRING,
        self::FAMILY                     => Family::class,
        self::IS_ADDON                   => self::TYPE_BOOL,
        self::HAS_ADDONS                 => self::TYPE_BOOL,
        self::ACTION_FLAGS               => ActionFlags::class,
        self::ADDON_PRIMARIES            => [
            self::MAPPING_TYPE  => Identifiers::class,
            self::MAPPING_ARRAY => true,
        ],
        self::CONVERSION_OFFER_PRIMARIES => [
            self::MAPPING_TYPE  => Identifiers::class,
            self::MAPPING_ARRAY => true,
        ],
        self::BASE_OFFER_PRIMARIES       => [
            self::MAPPING_TYPE  => Identifiers::class,
            self::MAPPING_ARRAY => true,
        ],
        self::ASSETS                     => Assets::class,
        self::ENVIRONMENT_AVAILABILITY   => self::TYPE_STRING,
        self::MARKETPLACE                => self::TYPE_STRING,
        self::IS_ENABLED                 => self::TYPE_BOOL,
        self::IS_TRIAL                   => self::TYPE_BOOL,
        self::LAST_UPDATE                => self::TYPE_STRING,
        self::MARKETING_TEXT             => MarketingText::class,
        self::VENDOR_OFFER_URL           => self::TYPE_STRING,
        self::SERVICE_DESCRIPTION        => self::TYPE_STRING,
        self::EULA                       => self::TYPE_STRING,
        self::END_CUSTOMER_EULA          => self::TYPE_STRING,
        self::END_CUSTOMER_REQUIREMENTS  => self::TYPE_STRING,
        self::END_CUSTOMER_FEATURES      => self::TYPE_STRING,
        self::XSP_URL                    => self::TYPE_STRING,
        self::SALE_CONSTRAINTS           => SaleConstraints::class,
        self::VENDOR                     => Vendor::class,
        self::PROGRAM                    => Program::class,
        self::WEIGHT_TOP_SALES           => self::TYPE_FLOAT,
        self::WEIGHT_FORCED              => self::TYPE_FLOAT,
        self::DEFAULT_PRICE_BAND         => PriceBand::class,
        self::PRICE_BAND                 => [
            self::MAPPING_TYPE  => PriceBand::class,
            self::MAPPING_ARRAY => true,
        ],
        self::RELATED_OFFERS             => [
            self::MAPPING_TYPE  => RelatedOffer::class,
            self::MAPPING_ARRAY => true,
        ],
        self::IS_INDEPENDANT_ADDON => self::TYPE_BOOL,
        self::IS_INDIRECT_BUSINESS       => self::TYPE_BOOL,
        self::RESELLERS                  => OfferResellers::class,
        self::PROMOTIONS                 => [
            self::MAPPING_TYPE  => Promotion::class,
            self::MAPPING_ARRAY => true,
        ],
        self::ATTRIBUTES_PARAMETERS       => [
            self::MAPPING_TYPE  => AttributesParameters::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
