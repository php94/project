<?php
return [
    'master'=>[
        'database_type' => 'mysql',
        'database_name' => 'root',
        'server' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
        'port' => '3306',
        'logging' => false,
        'option' => [
            \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_STRINGIFY_FETCHES => false,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ],
        'command' => ['SET SQL_MODE=ANSI_QUOTES'],
    ],
];