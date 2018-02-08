<?php

return array(

    'dataSource' => 'mysql',

    'mysql' => array(
        'driver' => 'mysql',

        'host' => '127.0.0.1',

        'database' => 'blog',

        'port' => '3306',

        'username' => 'root',

        'password' => '123456',

        'charset' => 'utf8',

        'collation' => 'utf8_unicode_ci',

        'prefix' => '',

        'engine' => null,
    ),

    'sqlite' => array(
        'driver' => 'sqlite',

        'database' => '',

        'prefix' => '',
    ),

    'postgres' => array(
        'driver' => 'pgsql',

        'host' => '192.168.22.213',

        'database' => 'blogs',

        'port' => '5432',

        'username' => 'postgres',

        'password' => '123456',

        'charset' => 'utf8',

        'prefix' => '',

        'schema' => 'public',
    ),
);