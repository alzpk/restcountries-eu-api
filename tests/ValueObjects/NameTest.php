<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    /** @test */
    public function it_can_create_name()
    {
        $object = Name::fromString('Test');

        $this->assertInstanceOf(Name::class, $object);
        $this->assertSame('Test', $object->toString());
    }
}
