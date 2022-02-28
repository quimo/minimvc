<?php
return [
    'db' => [
        'host' => 'localhost',
        'database' => 'minimvc',
        'user' => 'root',
        'password' => '',
        'pars' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
        ]
    ]
];