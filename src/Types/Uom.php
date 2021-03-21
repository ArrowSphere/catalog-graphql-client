<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Uom
 *
 * @method int getQuantity()
 * @method string getType()
 * @method Uom setQuantity(int $quantity)
 * @method Uom setType(string $type)
 */
class Uom extends AbstractType
{
    public const QUANTITY = 'quantity';

    public const TYPE = 'type';

    protected const MAPPING = [
        self::QUANTITY => self::TYPE_INT,
        self::TYPE     => self::TYPE_STRING,
    ];
}
