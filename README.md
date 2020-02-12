# Restcountries.eu API PHP wrapper
A simple PHP wrapper for restcountries.eu's API.

_Example of usage_
```
<?php

require_once './vendor/autoload.php';

$restCountriesEuAPI = new \Alzpk\restCountriesEuAPI\restCountriesEuAPI();

print_r($restCountriesEuAPI->all()->get());
```
