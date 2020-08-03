<?php

    return [

        'mysql' => [
            'driver' => 'mysql',
            'url' => '',
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => 'forge',
            'username' => 'root',
            'password' => '',
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null
        ],

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => '',
            'database' => '',
            'prefix' => '',
            'foreign_key_constraints' => '',
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => '',
            'host' => '',
            'port' => '',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => '',
            'host' => '',
            'port' => '',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ]

    ];
