<?php

declare(strict_types=1);

namespace Alzpk\RestCountriesEuAPI;

/**
 * @method array all()
 * @method array name(string $name, bool $fullText)
 * @method array code(string $code)
 * @method array codes(string $codes) - Semicolon separated codes
 * @method array currency(string $currency)
 * @method array lang(string $lang)
 * @method array capital(string $capital)
 * @method array callingCode(string $callingCode)
 * @method array region(string $region)
 * @method array regionalBloc(string $regionalBloc)
 */

class RestCountriesEuAPI
{
    /**
     * Constant that contains the base uri.
     */
    CONST baseUri = 'https://restcountries.eu';

    private $endpoints;
    private $endpoint;

    public function __construct()
    {
        $this->endpoints = include __DIR__ . '/endpoints.php';
    }

    public function __call($name, $arguments)
    {
        if(isset($this->endpoints[$name])) {
            $this->endpoint = $this->endpoints[$name];
            $this->endpoint['arguments'] = $arguments;
            return $this;
        }

        throw new \Exception('Call to undefined method ' . $name);
    }

    public function get()
    {
        $uri = $this->endpoint['uri'];

        if(isset($this->endpoint['params']) && !empty($this->endpoint['params'])) {
            foreach ($this->endpoint['arguments'] as $key => $argument) {
                $search = '{' . $key . '}';
                $replace = $argument;
                $uri = str_replace($search, $replace, $uri);
            }
        }

        $url = self::baseUri . '/' . $uri;
        $json = file_get_contents($url);

        return json_decode($json, true);
    }

}