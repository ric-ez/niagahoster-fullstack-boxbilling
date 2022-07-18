<?php
return array(
    'debug' => false,
    'salt' => '5f3ba42e786f51afdd1bac5342e98d2a',
    'url' => 'http://localhost:8004/',
    'admin_area_prefix' => '/bb-admin',
    'sef_urls' => true,
    'timezone' => 'UTC',
    'locale' => 'en_US',
    'locale_date_format' => '%A, %d %B %G',
    'locale_time_format' => ' %T',
    'path_data' => '/var/www/bb-data',
    'path_logs' => '/var/www/bb-data/log/application.log',
    'log_to_db' => true,
    'db' =>
    array(
        'type' => 'mysql',
        'host' => 'db',
        'name' => 'boxbilling',
        'user' => 'boxbilling',
        'password' => 'boxbilling',
    ),
    'twig' =>
    array(
        'debug' => true,
        'auto_reload' => true,
        'cache' => '/var/www/bb-data/cache',
    ),
    'api' =>
    array(
        'require_referrer_header' => false,
        'allowed_ips' =>
        array(),
        'rate_span' => 3600,
        'rate_limit' => 1000,
    ),
);
