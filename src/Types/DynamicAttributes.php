<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Billing
 *
 * @method string getDiskSize()
 * @method string getRam()
 * @method string getRegion()
 * @method string getVCpu()
 * @method string getReservationsAutofitGroup()
 * @method string getAcu()
 * @method string getMarketSegment()
 * @method string getVersion()
 * @method string getMetric()
 * @method DynamicAttributes setDiskSize(string $diskSize)
 * @method DynamicAttributes setRam(string $ram)
 * @method DynamicAttributes setRegion(string $region)
 * @method DynamicAttributes setVCpu(string $vCpu)
 * @method DynamicAttributes setReservationsAutofitGroup(string $reservationsAutofitGroup)
 * @method DynamicAttributes setAcu(string $acu)
 * @method DynamicAttributes setMarketSegment(string $marketSegment)
 * @method DynamicAttributes setVersion(string $version)
 * @method DynamicAttributes setMetric(string $metric)
 */
class DynamicAttributes extends AbstractType
{
    public const DISK_SIZE = 'diskSize';

    public const RAM = 'ram';

    public const REGION = 'region';

    public const VCPU = 'vCpu';

    public const RESERVATIONS_AUTOFIT_GROUP = 'reservationsAutofitGroup';

    public const ACU = 'acu';

    public const MARKET_SEGMENT = 'marketSegment';

    public const VERSION = 'version';

    public const METRIC = 'metric';

    protected const MAPPING = [
        self::DISK_SIZE                  => self::TYPE_STRING,
        self::RAM                        => self::TYPE_STRING,
        self::REGION                     => self::TYPE_STRING,
        self::VCPU                       => self::TYPE_STRING,
        self::RESERVATIONS_AUTOFIT_GROUP => self::TYPE_STRING,
        self::ACU                        => self::TYPE_STRING,
        self::MARKET_SEGMENT             => self::TYPE_STRING,
        self::VERSION                    => self::TYPE_STRING,
        self::METRIC                     => self::TYPE_STRING,
    ];
}
