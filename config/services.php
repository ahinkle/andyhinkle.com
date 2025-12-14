<?php

return [
    'github' => [
        'token' => env('GITHUB_TOKEN'),
    ],

    'transistor' => [
        'api_key' => env('TRANSISTOR_API_KEY'),
    ],

    'cloudflare' => [
        'zone_id' => env('CLOUDFLARE_ZONE'),
        'ruleset_id' => env('CLOUDFLARE_RULESET'),
        'rule_id' => env('CLOUDFLARE_RULE'),
        'token' => env('CLOUDFLARE_TOKEN'),
    ],
];
