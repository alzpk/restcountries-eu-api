<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\TopLevelDomain;
use PHPUnit\Framework\TestCase;

class TopLevelDomainTest extends TestCase
{
    /** @test */
    public function it_can_create_acronym()
    {
        $object = TopLevelDomain::fromString('Test');

        $this->assertInstanceOf(TopLevelDomain::class, $object);
        $this->assertSame('Test', $object->toString());
    }
}
