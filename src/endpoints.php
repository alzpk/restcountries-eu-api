<?php

return [
    'all' => [
        'method' => 'all',
        'uri' => 'rest/v2/all'
    ],
    'name' => [
        'method' => 'name',
        'uri' => 'rest/v2/name/{0}?fullText={1}',
        'params' => [
            'name',
            'fullText'
        ]
    ],
    'code' => [
        'method' => 'code',
        'uri' => 'rest/v2/alpha/{0}',
        'params' => [
            'code'
        ]
    ],
    'codes' => [
        'method' => 'codes',
        'uri' => 'rest/v2/alpha?codes={0}',
        'params' => [
            'codes'
        ]
    ],
    'currency' => [
        'method' => 'currency',
        'uri' => 'rest/v2/currency/{0}',
        'params' => [
            'currency'
        ]
    ],
    'lang' => [
        'method' => 'lang',
        'uri' => 'rest/v2/lang/{0}',
        'params' => [
            'lang'
        ]
    ],
    'capital' => [
        'method' => 'capital',
        'uri' => 'rest/v2/capital/{capital}',
        'params' => [
            'capital'
        ]
    ],
    'callingCode' => [
        'method' => 'callingcode',
        'uri' => 'rest/v2/callingcode/{0}',
        'params' => [
            'callingcode'
        ]
    ],
    'region' => [
        'method' => 'region',
        'uri' => 'rest/v2/region/{0}',
        'params' => [
            'region'
        ]
    ],
    'regionalBloc' => [
        'method' => 'regionalbloc',
        'uri' => 'rest/v2/regionalbloc/{0}',
        'params' => [
            'regionalbloc'
        ]
    ],
];