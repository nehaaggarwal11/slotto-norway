<?php

return [
    'date_format'         => 'd/m/Y',
    'time_format'         => 'H:i:s',
    'primary_language'    => 'en',
    'admin_role_id'    => env('APP_ADMIN_ROLE'),
    'auth0_admin_role_id'       => env('AUTH0_ADMIN_ROLE'),
    'available_languages' => [
        'en' => 'English',
    ],
    'sites' => [
        'current' => 'norway',
        'uk' => [
            'key' => "uk",
            'country' => "uk",
            'url' => env('APP_UK_SITE_URL'),
            'admin_login_title' => 'UK',
        ],
        'norway' => [
            'key' => "norway",
            'country' => "no",
            'url' => env('APP_NORWAY_SITE_URL'),
            'admin_login_title' => 'NORWAY',
        ],
        'usa' => [
            'key' => "usa",
            'country' => "us",
            'url' => env('APP_USA_SITE_URL'),
            'admin_login_title' => 'USA',
        ],
    ]
];
