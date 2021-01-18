<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Program
 */
class Program
{
    public const IS_ENABLED = 'isEnabled';

    public const LEGACY_CODE = 'legacyCode';

    public const NAMES = 'names';

    /** @var bool|null */
    private $isEnabled;

    /** @var string|null */
    private $legacyCode;

    /** @var ProgramName|null */
    private $names;

    /**
     * Program constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->isEnabled = $data[self::IS_ENABLED] ?? null;
        $this->legacyCode = $data[self::LEGACY_CODE] ?? null;
        $this->names = isset($data[self::NAMES]) ? new ProgramName($data[self::NAMES]) : null;
    }

    /**
     * @return bool|null
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * @return string|null
     */
    public function getLegacyCode(): ?string
    {
        return $this->legacyCode;
    }

    /**
     * @return ProgramName|null
     */
    public function getNames(): ?ProgramName
    {
        return $this->names;
    }
}
