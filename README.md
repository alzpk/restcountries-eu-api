### Package is abandoned
_Use this instead: https://packagist.org/packages/alzpk/restcountries-php-api-wrapper_

# PHP wrapper for Restcountries.eu API
PHP wrapper for restcountries.eu API, that returns a model with value objects, based on the response from the API.

## Requirements

```json
{
  "php": "^7.4",
  "guzzlehttp/guzzle": "7.4.2",
  "ext-json": "*"
}
```

## Installation

```bash
composer require alzpk/restcountries-eu-api
```

## Usage examples

```php
$client = new \Alzpk\RestCountriesEuAPI\RestCountriesClient();

// Fetch all countries
$countries = $client->all();

// Fetch countries by searching names
$countries = $client->name('Denmark');
```

## Client Map

| Method | Params | Example |
|---|---|---|
| _all_ |  | ```$client->all();``` |
| _name_ | (string) Country name | ```$client->name('Denmark');``` |
| _code_ | (string) Country code | ```$client->code('208');``` |
| _codes_ | (array) List of country codes | ```$client->codes(['208', '209']);``` |
| _currency_ | (string) Country currency | ```$client->curency('DKK');``` |
| _language_ | (string) Country language | ```$client->language('da');``` |
| _callingCode_ | (string) Country calling code | ```$client->callingCode('45');``` |
| _region_ | (string) Country region | ```$client->region('Europe');``` |
| _regionalBloc_ | (string) Country regional block | ```$client->regionalBloc('EU');``` |

## Testing
The package comes with individual tests for models, value objects and wrapper.
