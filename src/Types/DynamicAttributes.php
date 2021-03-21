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
 * @method DynamicAttributes setDiskSize(string $diskSize)
 * @method DynamicAttributes setRam(string $ram)
 * @method DynamicAttributes setRegion(string $region)
 * @method DynamicAttributes setVCpu(string $vCpu)
 * @method DynamicAttributes setReservationsAutofitGroup(string $reservationsAutofitGroup)
 * @method DynamicAttributes setAcu(string $acu)
 */
class DynamicAttributes extends AbstractType
{
    public const DISK_SIZE = 'diskSize';

    public const RAM = 'ram';

    public const REGION = 'region';

    public const VCPU = 'vCpu';

    public const RESERVATIONS_AUTOFIT_GROUP = 'reservationsAutofitGroup';

    public const ACU = 'acu';

    protected const MAPPING = [
        self::DISK_SIZE                  => self::TYPE_STRING,
        self::RAM                        => self::TYPE_STRING,
        self::REGION                     => self::TYPE_STRING,
        self::VCPU                       => self::TYPE_STRING,
        self::RESERVATIONS_AUTOFIT_GROUP => self::TYPE_STRING,
        self::ACU                        => self::TYPE_STRING,
    ];
}
