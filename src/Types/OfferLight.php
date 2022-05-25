<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class OfferLight
 *
 * @method Identifiers getIdentifiers()
 * @method string getName()
 * @method string getClassification()
 * @method string[] getArrowCategories()
 * @method bool getIsAddon()
 * @method bool getHasAddons()
 * @method string getEnvironmentAvailability()
 * @method bool getIsEnabled()
 * @method bool getIsTrial()
 * @method string getLastUpdate()
 * @method string[] getArrowSubCategories()
 * @method OfferResellers getResellers()
 * @method Promotion[] getPromotions()
 * @method OfferLight setIdentifiers(Identifiers $identifiers)
 * @method OfferLight setName(string $name)
 * @method OfferLight setClassification(string $classification)
 * @method OfferLight setArrowCategories(string[] $arrowCategories)
 * @method OfferLight setIsAddon(bool $isAddon)
 * @method OfferLight setHasAddons(bool $hasAddons)
 * @method OfferLight setEnvironmentAvailability(string $environmentAvailability)
 * @method OfferLight setIsEnabled(bool $isEnabled)
 * @method OfferLight setIsTrial(bool $isTrial)
 * @method OfferLight setLastUpdate(string $lastUpdate)
 * @method OfferLight setArrowSubCategories(string[] $arrowSubCategories)
 * @method OfferLight setResellers(OfferResellers $offerResellers)
 * @method OfferLight setPromotions(Promotion[] $promotions)
 */
class OfferLight extends AbstractType
{
    public const IDENTIFIERS = 'identifiers';

    public const NAME = 'name';

    public const CLASSIFICATION = 'classification';

    public const ARROW_CATEGORIES = 'arrowCategories';

    public const IS_ADDON = 'isAddon';

    public const HAS_ADDONS = 'hasAddons';

    public const ENVIRONMENT_AVAILABILITY = 'environmentAvailability';

    public const IS_ENABLED = 'isEnabled';

    public const IS_TRIAL = 'isTrial';

    public const LAST_UPDATE = 'lastUpdate';

    public const ARROW_SUB_CATEGORIES = 'arrowSubCategories';

    public const RESELLERS = 'resellers';

    public const PROMOTIONS = 'promotions';

    protected const MAPPING = [
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
        self::IS_ADDON                   => self::TYPE_BOOL,
        self::HAS_ADDONS                 => self::TYPE_BOOL,
        self::ENVIRONMENT_AVAILABILITY   => self::TYPE_STRING,
        self::IS_ENABLED                 => self::TYPE_BOOL,
        self::IS_TRIAL                   => self::TYPE_BOOL,
        self::LAST_UPDATE                => self::TYPE_STRING,
        self::RESELLERS                  => OfferResellers::class,
        self::PROMOTIONS                 => [
            self::MAPPING_TYPE  => Promotion::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
