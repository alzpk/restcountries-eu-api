<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Acronym;
use Alzpk\RestCountriesEuAPI\ValueObjects\Name;
use Alzpk\RestCountriesEuAPI\ValueObjects\RegionalBloc;
use PHPUnit\Framework\TestCase;

class RegionalBlocTest extends TestCase
{
    /** @test */
    public function it_can_create_regional_bloc()
    {
        $object = new RegionalBloc(
            'acronymtest',
            'nametest',
            [
                new Acronym('otheracronym')
            ],
            [
                new Name('othername')
            ]
        );

        $this->assertInstanceOf(RegionalBloc::class, $object);
        $this->assertSame('acronymtest', $object->getAcronym());
        $this->assertSame('nametest', $object->getName());
        $this->assertIsArray($object->getOtherAcronyms());
        $this->assertIsArray($object->getOtherNames());
    }
}
