<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Billing
 *
 * @method string getCores()
 * @method string getDiskSize()
 * @method string getRam()
 * @method string getRegion()
 * @method string getVCpu()
 * @method string getReservationsAutofitGroup()
 * @method bool getHasAcu()
 */
class DynamicAttributes extends AbstractType
{
    public const CORES = 'cores';

    public const DISK_SIZE = 'diskSize';

    public const RAM = 'ram';

    public const REGION = 'region';

    public const VCPU = 'vCpu';

    public const RESERVATIONS_AUTOFIT_GROUP = 'reservationsAutofitGroup';

    public const HAS_ACU = 'hasAcu';

    protected const MAPPING = [
        self::CORES                      => self::TYPE_STRING,
        self::DISK_SIZE                  => self::TYPE_STRING,
        self::RAM                        => self::TYPE_STRING,
        self::REGION                     => self::TYPE_STRING,
        self::VCPU                       => self::TYPE_STRING,
        self::RESERVATIONS_AUTOFIT_GROUP => self::TYPE_STRING,
        self::HAS_ACU                    => self::TYPE_BOOL,

    ];
}
