<?php

namespace Alzpk\RestCountriesEuAPI\Tests\Models;

use Alzpk\RestCountriesEuAPI\Models\Country;
use Alzpk\RestCountriesEuAPI\ValueObjects\AlternativeSpelling;
use Alzpk\RestCountriesEuAPI\ValueObjects\Border;
use Alzpk\RestCountriesEuAPI\ValueObjects\CallingCode;
use Alzpk\RestCountriesEuAPI\ValueObjects\Currency;
use Alzpk\RestCountriesEuAPI\ValueObjects\Language;
use Alzpk\RestCountriesEuAPI\ValueObjects\RegionalBloc;
use Alzpk\RestCountriesEuAPI\ValueObjects\Timezone;
use Alzpk\RestCountriesEuAPI\ValueObjects\TopLevelDomain;
use Alzpk\RestCountriesEuAPI\ValueObjects\Translation;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    /** @test */
    public function it_can_create_country()
    {
        $model = new Country(
            'Denmark',
            'Danmark',
            'Copenhagen',
            208,
            'DK',
            'DNK',
            'Europe',
            'Northern Europe',
            5717014,
            56.0,
            10.0,
            'Danish',
            43094.0,
            'https://restcountries.eu/data/dnk.svg',
            'DEN',
            [
                TopLevelDomain::fromString('.dk')
            ],
            [
                CallingCode::fromString('45')
            ],
            [
                AlternativeSpelling::fromString("DK"),
                AlternativeSpelling::fromString("Danmark"),
                AlternativeSpelling::fromString("Kingdom of Denmark"),
                AlternativeSpelling::fromString("Kongeriget Danmark")
            ],
            [
                Timezone::fromString("UTC-04:00"),
                Timezone::fromString("UTC-03:00"),
                Timezone::fromString("UTC-01:00"),
                Timezone::fromString("UTC"),
                Timezone::fromString("UTC+01:00"),
            ],
            [
                Border::fromString('DEU')
            ],
            [
                new Currency('DKK', 'Danish krone', 'kr')
            ],
            [
                new Language("da", "dan", "Danish", "dansk")
            ],
            [
                new Translation("de", "Dänemark"),
                new Translation("es", "Dinamarca")
            ],
            [
                new RegionalBloc("EU", "European Union", [], [])
            ]
        );

        $this->assertInstanceOf(Country::class, $model);
        $this->assertSame('Denmark', $model->getName());
        $this->assertSame('Danmark', $model->getNativeName());
        $this->assertSame('Copenhagen', $model->getCapital());
        $this->assertSame(208, $model->getNumericCode());
        $this->assertSame('DK', $model->getAlpha2Code());
        $this->assertSame('DNK', $model->getAlpha3Code());
        $this->assertSame('Europe', $model->getRegion());
        $this->assertSame('Northern Europe', $model->getSubregion());
        $this->assertSame(5717014, $model->getPopulation());
        $this->assertSame(56.0, $model->getLat());
        $this->assertSame(10.0, $model->getLng());
        $this->assertSame('Danish', $model->getDemonym());
        $this->assertSame(43094.0, $model->getArea());
        $this->assertSame('https://restcountries.eu/data/dnk.svg', $model->getFlag());
        $this->assertSame('DEN', $model->getCioc());
        $this->assertIsArray($model->getTopLevelDomain());
        $this->assertIsArray($model->getCallingCodes());
        $this->assertIsArray($model->getAltSpellings());
        $this->assertIsArray($model->getTimezones());
        $this->assertIsArray($model->getBorders());
        $this->assertIsArray($model->getCurrencies());
        $this->assertIsArray($model->getLanguages());
        $this->assertIsArray($model->getTranslations());
        $this->assertIsArray($model->getRegionalBlocs());
    }
}
