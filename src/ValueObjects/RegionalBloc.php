<?php

namespace Alzpk\RestCountriesEuAPI\ValueObjects;

use Alzpk\RestCountriesEuAPI\ValueObjects\Name;

class RegionalBloc
{
    private string $acronym;
    private string $name;

    /** @var list<Acronym> */
    private array $otherAcronyms;
    /** @var list<Name> */
    private array $otherNames;

    /**
     * @param list<Acronym>  $otherAcronyms
     * @param list<Name>$otherNames
     */
    public function __construct(string $acronym, string $name, array $otherAcronyms, array $otherNames)
    {
        $this->acronym = $acronym;
        $this->name = $name;
        $this->otherAcronyms = $otherAcronyms;
        $this->otherNames = $otherNames;
    }

    public static function fromResponse(array $response): self
    {
        return new self(
            $response['acronym'] ?? '',
            $response['name'] ?? '',
            array_map(function (string $value) {
                return Acronym::fromString($value);
            }, $response['otherAcronyms']),
            array_map(function (string $value) {
                return Name::fromString($value);
            }, $response['otherNames'])
        );
    }

    /**
     * @return string
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return list<Acronym>
     */
    public function getOtherAcronyms(): array
    {
        return $this->otherAcronyms;
    }

    /**
     * @return list<Name>
     */
    public function getOtherNames(): array
    {
        return $this->otherNames;
    }
}