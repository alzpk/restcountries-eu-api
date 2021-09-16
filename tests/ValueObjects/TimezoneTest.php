<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Timezone;
use PHPUnit\Framework\TestCase;

class TimezoneTest extends TestCase
{
    /** @test */
    public function it_can_create_timezone()
    {
        $object = Timezone::fromString('+02:00');

        $this->assertInstanceOf(Timezone::class, $object);
        $this->assertSame('+02:00', $object->toString());
    }
}
