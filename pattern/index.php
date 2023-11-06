<?php

require 'MyPDO';

$settings = [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3307',
        'schema' => 'test',
        'username' => 'root',
        'password' => ''
    ]
];

$db = new MyPDO($settings);
