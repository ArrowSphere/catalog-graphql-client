<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Product
 */
class Product
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

    /** @var string|null */
    private $id;

    /** @var Identifiers|null */
    private $identifiers;

    /** @var string|null */
    private $name;

    /** @var string|null */
    private $classification;

    /** @var string[]|null */
    private $arrowCategories;

    /** @var string|null */
    private $licenseAgreementType;

    /** @var Family|null */
    private $family;

    /** @var bool|null */
    private $isAddon;

    /** @var bool|null */
    private $hasAddons;

    /** @var ActionFlags|null */
    private $actionFlags;

    /** @var Identifiers[]|null */
    private $addonPrimaries;

    /** @var Identifiers[]|null */
    private $conversionOfferPrimaries;

    /** @var Identifiers[]|null */
    private $baseOfferPrimaries;

    /** @var Assets|null */
    private $assets;

    /** @var string|null */
    private $environmentAvailability;

    /** @var string|null */
    private $marketplace;

    /** @var bool|null */
    private $isEnabled;

    /** @var bool|null */
    private $isTrial;

    /** @var string|null */
    private $lastUpdate;

    /** @var MarketingText|null */
    private $marketingText;

    /** @var string|null */
    private $vendorOfferUrl;

    /** @var string|null */
    private $serviceDescription;

    /** @var string|null */
    private $eula;

    /** @var string|null */
    private $endCustomerEula;

    /** @var string|null */
    private $endCustomerRequirements;

    /** @var string|null */
    private $endCustomerFeatures;

    /** @var string|null */
    private $xspUrl;

    /** @var SaleConstraints|null */
    private $saleConstraints;

    /** @var Vendor|null */
    private $vendor;

    /** @var Program|null */
    private $program;

    /** @var float|null */
    private $weightTopSales;

    /** @var float|null */
    private $weightForced;

    /** @var PriceBand[]|null */
    private $priceBand;

    /**
     * Product constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = $data[self::ID] ?? null;
        $this->identifiers = isset($data[self::IDENTIFIERS]) ? new Identifiers($data[self::IDENTIFIERS]) : null;
        $this->name = $data[self::NAME] ?? null;
        $this->classification = $data[self::CLASSIFICATION] ?? null;
        $this->arrowCategories = $data[self::ARROW_CATEGORIES] ?? null;
        $this->licenseAgreementType = $data[self::LICENSE_AGREEMENT_TYPE] ?? null;
        $this->family = isset($data[self::FAMILY]) ? new Family($data[self::FAMILY]) : null;
        $this->isAddon = $data[self::IS_ADDON] ?? null;
        $this->hasAddons = $data[self::HAS_ADDONS] ?? null;
        $this->actionFlags = isset($data[self::ACTION_FLAGS]) ? new ActionFlags($data[self::ACTION_FLAGS]) : null;

        $this->addonPrimaries = isset($data[self::ADDON_PRIMARIES]) ? array_map(static function (array $addonPrimary) {
            return new Identifiers($addonPrimary);
        }, $data[self::ADDON_PRIMARIES]) : null;

        $this->conversionOfferPrimaries = isset($data[self::CONVERSION_OFFER_PRIMARIES]) ? array_map(static function (array $conversionOfferPrimary) {
            return new Identifiers($conversionOfferPrimary);
        }, $data[self::CONVERSION_OFFER_PRIMARIES]) : null;

        $this->baseOfferPrimaries = isset($data[self::BASE_OFFER_PRIMARIES]) ? array_map(static function (array $baseOfferPrimary) {
            return new Identifiers($baseOfferPrimary);
        }, $data[self::BASE_OFFER_PRIMARIES]) : null;

        $this->assets = isset($data[self::ASSETS]) ? new Assets($data[self::ASSETS]) : null;
        $this->environmentAvailability = $data[self::ENVIRONMENT_AVAILABILITY] ?? null;
        $this->marketplace = $data[self::MARKETPLACE] ?? null;
        $this->isEnabled = $data[self::IS_ENABLED] ?? null;
        $this->isTrial = $data[self::IS_TRIAL] ?? null;
        $this->lastUpdate = $data[self::LAST_UPDATE] ?? null;
        $this->marketingText = isset($data[self::MARKETING_TEXT]) ? new MarketingText($data[self::MARKETING_TEXT]) : null;
        $this->vendorOfferUrl = $data[self::VENDOR_OFFER_URL] ?? null;
        $this->serviceDescription = $data[self::SERVICE_DESCRIPTION] ?? null;
        $this->eula = $data[self::EULA] ?? null;
        $this->endCustomerEula = $data[self::END_CUSTOMER_EULA] ?? null;
        $this->endCustomerRequirements = $data[self::END_CUSTOMER_REQUIREMENTS] ?? null;
        $this->endCustomerFeatures = $data[self::END_CUSTOMER_FEATURES] ?? null;
        $this->xspUrl = $data[self::XSP_URL] ?? null;
        $this->saleConstraints = isset($data[self::SALE_CONSTRAINTS]) ? new SaleConstraints($data[self::SALE_CONSTRAINTS]) : null;
        $this->vendor = isset($data[self::VENDOR]) ? new Vendor($data[self::VENDOR]) : null;
        $this->program = isset($data[self::PROGRAM]) ? new Program($data[self::PROGRAM]) : null;
        $this->weightTopSales = $data[self::WEIGHT_TOP_SALES] ?? null;
        $this->weightForced = $data[self::WEIGHT_FORCED] ?? null;

        $this->priceBand = isset($data[self::PRICE_BAND]) ? array_map(static function (array $priceBand) {
            return new PriceBand($priceBand);
        }, $data[self::PRICE_BAND]) : null;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return Identifiers|null
     */
    public function getIdentifiers(): ?Identifiers
    {
        return $this->identifiers;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getClassification(): ?string
    {
        return $this->classification;
    }

    /**
     * @return string[]|null
     */
    public function getArrowCategories(): ?array
    {
        return $this->arrowCategories;
    }

    /**
     * @return string|null
     */
    public function getLicenseAgreementType(): ?string
    {
        return $this->licenseAgreementType;
    }

    /**
     * @return Family|null
     */
    public function getFamily(): ?Family
    {
        return $this->family;
    }

    /**
     * @return bool|null
     */
    public function getIsAddon(): ?bool
    {
        return $this->isAddon;
    }

    /**
     * @return bool|null
     */
    public function getHasAddons(): ?bool
    {
        return $this->hasAddons;
    }

    /**
     * @return ActionFlags|null
     */
    public function getActionFlags(): ?ActionFlags
    {
        return $this->actionFlags;
    }

    /**
     * @return Identifiers[]|null
     */
    public function getAddonPrimaries(): ?array
    {
        return $this->addonPrimaries;
    }

    /**
     * @return Identifiers[]|null
     */
    public function getConversionOfferPrimaries(): ?array
    {
        return $this->conversionOfferPrimaries;
    }

    /**
     * @return Identifiers[]|null
     */
    public function getBaseOfferPrimaries(): ?array
    {
        return $this->baseOfferPrimaries;
    }

    /**
     * @return Assets|null
     */
    public function getAssets(): ?Assets
    {
        return $this->assets;
    }

    /**
     * @return string|null
     */
    public function getEnvironmentAvailability(): ?string
    {
        return $this->environmentAvailability;
    }

    /**
     * @return string|null
     */
    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    /**
     * @return bool|null
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * @return bool|null
     */
    public function getIsTrial(): ?bool
    {
        return $this->isTrial;
    }

    /**
     * @return string|null
     */
    public function getLastUpdate(): ?string
    {
        return $this->lastUpdate;
    }

    /**
     * @return MarketingText|null
     */
    public function getMarketingText(): ?MarketingText
    {
        return $this->marketingText;
    }

    /**
     * @return string|null
     */
    public function getVendorOfferUrl(): ?string
    {
        return $this->vendorOfferUrl;
    }

    /**
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }

    /**
     * @return string|null
     */
    public function getEula(): ?string
    {
        return $this->eula;
    }

    /**
     * @return string|null
     */
    public function getEndCustomerEula(): ?string
    {
        return $this->endCustomerEula;
    }

    /**
     * @return string|null
     */
    public function getEndCustomerRequirements(): ?string
    {
        return $this->endCustomerRequirements;
    }

    /**
     * @return string|null
     */
    public function getEndCustomerFeatures(): ?string
    {
        return $this->endCustomerFeatures;
    }

    /**
     * @return string|null
     */
    public function getXspUrl(): ?string
    {
        return $this->xspUrl;
    }

    /**
     * @return SaleConstraints|null
     */
    public function getSaleConstraints(): ?SaleConstraints
    {
        return $this->saleConstraints;
    }

    /**
     * @return Vendor|null
     */
    public function getVendor(): ?Vendor
    {
        return $this->vendor;
    }

    /**
     * @return Program|null
     */
    public function getProgram(): ?Program
    {
        return $this->program;
    }

    /**
     * @return float|null
     */
    public function getWeightTopSales(): ?float
    {
        return $this->weightTopSales;
    }

    /**
     * @return float|null
     */
    public function getWeightForced(): ?float
    {
        return $this->weightForced;
    }

    /**
     * @return PriceBand[]|null
     */
    public function getPriceBand(): ?array
    {
        return $this->priceBand;
    }
}
