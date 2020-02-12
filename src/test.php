<?php

require_once 'RestCountriesEuAPI.php';

$restCountriesEuAPI = new \Alzpk\RestCountriesAPI\RestCountriesEuAPI();

print_r($restCountriesEuAPI->currency('dkk')->get());
