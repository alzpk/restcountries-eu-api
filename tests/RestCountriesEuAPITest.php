<?php

namespace Alzpk\RestCountriesEuAPI\Tests;

use Alzpk\RestCountriesEuAPI\RestCountriesEuAPI;
use PHPUnit\Framework\TestCase;

class RestCountriesEuAPITest extends TestCase
{
    /** @test */
    public function it_can_get_all_countries()
    {
        $client = new RestCountriesEuAPI();

        var_dump($client->all()->get());
    }
}
