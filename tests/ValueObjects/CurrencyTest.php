<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    /** @test */
    public function it_can_create_currency()
    {
        $object = new Currency('DKK', 'Kroner', 'kr');

        $this->assertInstanceOf(Currency::class, $object);
        $this->assertSame('DKK', $object->getCode());
        $this->assertSame('Kroner', $object->getName());
        $this->assertSame('kr', $object->getSymbol());
    }
}
