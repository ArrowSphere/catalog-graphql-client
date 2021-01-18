<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Prices
 */
class Prices
{
    public const BUY = 'buy';

    public const SELL = 'sell';

    public const PUBLIC = 'public';

    /** @var string|null */
    private $buy;

    /** @var string|null */
    private $sell;

    /** @var string|null */
    private $public;

    /**
     * Prices constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->buy = $data[self::BUY] ?? null;
        $this->sell = $data[self::SELL] ?? null;
        $this->public = $data[self::PUBLIC] ?? null;
    }

    /**
     * @return string|null
     */
    public function getBuy(): ?string
    {
        return $this->buy;
    }

    /**
     * @return string|null
     */
    public function getSell(): ?string
    {
        return $this->sell;
    }

    /**
     * @return string|null
     */
    public function getPublic(): ?string
    {
        return $this->public;
    }
}
