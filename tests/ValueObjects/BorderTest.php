<?php

namespace Alzpk\RestCountriesEuAPI\Tests\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Border;
use PHPUnit\Framework\TestCase;

class BorderTest extends TestCase
{
    /** @test */
    public function it_can_create_border()
    {
        $object = Border::fromString('Test');

        $this->assertInstanceOf(Border::class, $object);
        $this->assertSame('Test', $object->toString());
    }
}
