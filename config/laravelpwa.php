<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#666666',
        'display' => 'standalone',
        'orientation'=> 'any',
        'icons' => [
            '152x152' => '/images/icons/apple-icon-152.png',
        ],
        'splash' => [
            '640x1136' => '/images/icons/apple-splash-640x1136.png',
            '750x1334' => '/images/icons/apple-splash-750x1334.png',
            '828x1792' => '/images/icons/apple-splash-828x1792.png',
            '1125x2436' => '/images/icons/apple-splash-1125x2436.png',
            '1242x2208' => '/images/icons/apple-splash-1242x2208.png',
            '1242x2688' => '/images/icons/apple-splash-1242x2688.png',
            '1536x2048' => '/images/icons/apple-splash-1536x2048.png',
            '1668x2224' => '/images/icons/apple-splash-1668x2224.png',
            '1668x2388' => '/images/icons/apple-splash-1668x2388.png',
            '2048x2732' => '/images/icons/apple-splash-2048x2732.png',
        ],
        'custom' => []
    ]
];
