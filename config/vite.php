<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configurations
    |--------------------------------------------------------------------------
    | The following describes a set of configurations that can be used
    | independently. Because Vite does not support generating multiple
    | bundles, using separate configuration files is necessary.
    | https://laravel-vite.dev/configuration/laravel-package.html#configs
    */
    'configs' => [
        'default' => [
            'entrypoints' => [
                'paths' => [
                    'resources/js/front.js',
                ],
                'ignore' => '/\\.(d\\.ts|json)$/',
            ],
            'dev_server' => [
                'enabled' => true,
                'url' => env('DEV_SERVER_URL', 'http://localhost:5173'),
                'ping_before_using_manifest' => true,
                'ping_timeout' => 1,
                'key' => env('DEV_SERVER_KEY'),
                'cert' => env('DEV_SERVER_CERT'),
            ],
            'build_path' => 'build/front',
        ],
        'back' => [
            'entrypoints' => [
                'paths' => [
                    'resources/js/back.js',
                ],
                'ignore' => '/\\.(d\\.ts|json)$/',
            ],
            'dev_server' => [
                'enabled' => true,
                'url' => env('DEV_SERVER_URL_BACK', 'http://localhost:5174'),
                'ping_before_using_manifest' => true,
                'ping_timeout' => 1,
                'key' => env('DEV_SERVER_KEY'),
                'cert' => env('DEV_SERVER_CERT'),
            ],
            'build_path' => 'build/back',
        ],
    ],



];
