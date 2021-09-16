<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\CallingCode;
use PHPUnit\Framework\TestCase;

class CallingCodeTest extends TestCase
{
    /** @test */
    public function it_can_create_calling_code()
    {
        $object = CallingCode::fromString('45');

        $this->assertInstanceOf(CallingCode::class, $object);
        $this->assertSame('45', $object->toString());
        $this->assertSame(45, $object->toInt());
    }
}
