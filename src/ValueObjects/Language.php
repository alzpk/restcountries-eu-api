<?php

namespace Alzpk\RestCountriesEuAPI\ValueObjects;

class Language
{
    private string $iso6391;
    private string $iso6392;
    private string $name;
    private string $nativeName;

    public function __construct(string $iso6391, string $iso6392, string $name, string $nativeName)
    {
        $this->iso6391 = $iso6391;
        $this->iso6392 = $iso6392;
        $this->name = $name;
        $this->nativeName = $nativeName;
    }

    public static function fromResponse(array $response): self
    {
        return new self(
            $response['iso639_1'] ?? '',
            $response['iso639_2'] ?? '',
            $response['name'] ?? '',
            $response['nativeName'] ?? '',
        );
    }

    /**
     * @return string
     */
    public function getIso6391(): string
    {
        return $this->iso6391;
    }

    /**
     * @return string
     */
    public function getIso6392(): string
    {
        return $this->iso6392;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNativeName(): string
    {
        return $this->nativeName;
    }
}