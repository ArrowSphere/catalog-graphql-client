<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Family
 *
 * @method string[] getArrowSubCategories()
 * @method string getClassification()
 * @method string[] getClassifications()
 * @method string getId()
 * @method string getName()
 * @method Family setArrowSubCategories(string[] $arrowSubCategories)
 * @method Family setClassification(string $classification)
 * @method Family setClassifications(string[] $classifications)
 * @method Family setId(string $id)
 * @method Family setName(string $name)
 */
class Family extends AbstractType
{
    public const ARROW_SUB_CATEGORIES = 'arrowSubCategories';

    public const CLASSIFICATION = 'classification';

    public const CLASSIFICATIONS = 'classifications';

    public const ID = 'id';

    public const NAME = 'name';

    protected const MAPPING = [
        self::ARROW_SUB_CATEGORIES => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::CLASSIFICATION => self::TYPE_STRING,
        self::CLASSIFICATIONS => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::ID   => self::TYPE_STRING,
        self::NAME => self::TYPE_STRING,
    ];
}
