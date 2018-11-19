<?php
    $host       =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   'osrs';
    $dsn        =   "mysql:host=$host;dbname=$dbname";
    $options    =   [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                    ];
    $conn = new PDO($dsn, $username, $password, $options);

?>
