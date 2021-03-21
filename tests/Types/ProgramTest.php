<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Program;
use ArrowSphere\CatalogGraphQLClient\Types\ProgramName;
use PHPUnit\Framework\TestCase;

/**
 * Class ProgramTest
 */
class ProgramTest extends TestCase
{
    public function testFields(): void
    {
        $program = new Program([
            Program::IS_ENABLED  => true,
            Program::LEGACY_CODE => 'legacy code',
            Program::NAMES       => [],
        ]);

        self::assertTrue($program->getIsEnabled());
        self::assertSame('legacy code', $program->getLegacyCode());
        self::assertInstanceOf(ProgramName::class, $program->getNames());

        $program
            ->setNames(new ProgramName([ProgramName::FULL => 'full']))
            ->setIsEnabled(false)
            ->setLegacyCode('my legacy code')
        ;

        self::assertFalse($program->getIsEnabled());
        self::assertSame('my legacy code', $program->getLegacyCode());
        self::assertInstanceOf(ProgramName::class, $program->getNames());
        self::assertEquals('full', $program->getNames()->getFull());
    }
}
