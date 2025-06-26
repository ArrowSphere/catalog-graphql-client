<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class AttributesParameters
 *
 * @method string getName()
 * @method string getLabel()
 * @method int getPosition()
 * @method string getType()
 * @method self setName(string $name)
 * @method self setLabel(string $label)
 * @method self setPosition(int $position)
 * @method self setType(string $type)
 */
class AttributesParameters extends AbstractType
{
    public const NAME = 'name';

    public const LABEL = 'label';

    public const POSITION = 'position';

    public const TYPE = 'type';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::LABEL => self::TYPE_STRING,
        self::POSITION => self::TYPE_INT,
        self::TYPE => self::TYPE_STRING,
    ];

    public const ATTRIBUTE_TYPE_STANDARD = 'STANDARD';
    public const ATTRIBUTE_TYPE_INTERNAL = 'INTERNAL';
    public const ATTRIBUTE_TYPE_READ_ONLY = 'READ_ONLY';
}
