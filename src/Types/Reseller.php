<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Reseller
 *
 * @method string getXspRef()
 * @method Reseller setXspRef(string $xspRef)
 */
class Reseller extends AbstractType
{
    public const XSP_REF = 'xspRef';

    public const MAPPING = [
        self::XSP_REF => self::TYPE_STRING,
    ];
}
