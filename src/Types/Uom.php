<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Uom
 */
class Uom
{
    public const QUANTITY = 'quantity';

    public const TYPE = 'type';

    /** @var int|null */
    private $quantity;

    /** @var string|null */
    private $type;

    /**
     * Uom constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->quantity = $data[self::QUANTITY] ?? null;
        $this->type = $data[self::TYPE] ?? null;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
