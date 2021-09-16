<?php

namespace Alzpk\RestCountriesEuAPI\Tests;

use Alzpk\RestCountriesEuAPI\ClientInterface;
use Alzpk\RestCountriesEuAPI\MockClient;
use Alzpk\RestCountriesEuAPI\Models\Country;
use Alzpk\RestCountriesEuAPI\RestCountriesClient;
use PHPUnit\Framework\TestCase;

class RestCountriesClientTest extends TestCase
{
    public function dataProvider()
    {
        yield [new MockClient()];
        //yield [new RestCountriesClient()]; // Uncomment to test the actual API
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_all_countries(ClientInterface $client)
    {
        $countries = $client->all();

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_name(ClientInterface $client)
    {
        $countries = $client->name('Denmark');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_code(ClientInterface $client)
    {
        $countries = $client->code('208');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_codes(ClientInterface $client)
    {
        $countries = $client->codes(['208', '209']);

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_currency(ClientInterface $client)
    {
        $countries = $client->currency('DKK');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_language(ClientInterface $client)
    {
        $countries = $client->language('Danish');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_capital(ClientInterface $client)
    {
        $countries = $client->capital('Copenhagen');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_calling_code(ClientInterface $client)
    {
        $countries = $client->callingCode('45');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_region(ClientInterface $client)
    {
        $countries = $client->region('Europe');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_can_get_countries_by_regional_bloc(ClientInterface $client)
    {
        $countries = $client->regionalBloc('EU');

        $this->assertIsArray($countries);
        $this->assertInstanceOf(Country::class, end($countries));
    }
}
