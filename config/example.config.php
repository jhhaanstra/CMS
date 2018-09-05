<?php

const CONFIG = [
    'database' => [
        'dbname' => 'cms',
        'user' => 'root',
        'password' => 'root',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ],

    'site' => [
        'default_language' => 'en_US',
        'default_theme' => 'chrissy'
    ],

    'entities' => [__DIR__ . '/../entities'],

    'templates' => [__DIR__ . '/../core/views'],

    'urls' => [
        'root' => 'http://localhost/CMS',
        'public' => 'http://localhost/CMS/public',
        'base' => 'http://localhost'
    ],

    'paths' => [
        'root' => '/var/www/html/CMS',
        'themes' => '/var/www/html/CMS/public/themes'
    ]
];