<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PromotionPrices
 *
 * @method string getPromotionId()
 * @method Prices getPrices()
 * @method PromotionPrices setPromotionId(string $promotionId)
 * @method PromotionPrices setPrices(Prices $prices)
 */
class PromotionPrices extends AbstractType
{
    public const PROMOTION_ID = 'promotionId';

    public const PRICES = 'prices';

    protected const MAPPING = [
        self::PROMOTION_ID => self::TYPE_STRING,
        self::PRICES => Prices::class,
    ];
}
