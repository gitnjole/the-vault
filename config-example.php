<?php

return [
    'database' => [
        'dsn' => 'mysql:host=localhost;port=3306;dbname=DBNAME',
        'username' => 'DB_USER',
        'password' => 'DB_PASS',
        'params' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    ],
];
