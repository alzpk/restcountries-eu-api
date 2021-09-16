<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Translation;
use PHPUnit\Framework\TestCase;

class TranslationTest extends TestCase
{
    /** @test */
    public function it_can_create_translation()
    {
        $object = new Translation('dk', 'Test');

        $this->assertInstanceOf(Translation::class, $object);
        $this->assertSame('dk', $object->getCountryCode());
        $this->assertSame('Test', $object->getValue());
    }
}
