<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Language;
use PHPUnit\Framework\TestCase;

class LanguageTest extends TestCase
{
    /** @test */
    public function it_can_create_language()
    {
        $object = new Language('iso1test', 'iso2test', 'nametest', 'nativenametest');

        $this->assertInstanceOf(Language::class, $object);
        $this->assertSame('iso1test', $object->getIso6391());
        $this->assertSame('iso2test', $object->getIso6392());
        $this->assertSame('nametest', $object->getName());
        $this->assertSame('nativenametest', $object->getNativeName());
    }
}
