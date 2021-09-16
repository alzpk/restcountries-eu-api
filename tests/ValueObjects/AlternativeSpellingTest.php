<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\AlternativeSpelling;
use PHPUnit\Framework\TestCase;

class AlternativeSpellingTest extends TestCase
{
    /** @test */
    public function it_can_create_alternative_spelling()
    {
        $object = AlternativeSpelling::fromString('Test');

        $this->assertInstanceOf(AlternativeSpelling::class, $object);
        $this->assertSame('Test', $object->toString());
    }
}
