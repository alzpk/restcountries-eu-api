# Restcountries.eu API PHP wrapper
A simple PHP wrapper for restcountries.eu's API.

## Requirements

```json
{
  "php": "^7.4",
  "guzzlehttp/guzzle": "7.4.x-dev",
  "ext-json": "*"
}
```

## Installation

```bash
composer require alzpk/restcountries-eu-api
```

## Usage example

```php
$restCountriesEuAPI = new \Alzpk\RestCountriesEuAPI\RestCountriesEuAPI();

print_r($restCountriesEuAPI->all()->get());
```

## Testing
The package comes with individual tests for models, value objects and wrapper.