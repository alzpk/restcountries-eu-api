<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Acronym;
use PHPUnit\Framework\TestCase;

class AcronymTest extends TestCase
{
    /** @test */
    public function it_can_create_acronym()
    {
        $object = Acronym::fromString('Test');

        $this->assertInstanceOf(Acronym::class, $object);
        $this->assertSame('Test', $object->toString());
    }
}
