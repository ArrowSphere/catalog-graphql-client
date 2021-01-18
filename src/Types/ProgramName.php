<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ProgramName
 */
class ProgramName
{
    public const FULL = 'full';

    /** @var string|null */
    private $full;

    /**
     * ProgramName constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->full = $data[self::FULL] ?? null;
    }

    /**
     * @return string|null
     */
    public function getFull(): ?string
    {
        return $this->full;
    }
}
