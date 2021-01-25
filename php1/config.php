<?php
// CONEXÃO COM BD MYSQL, USANDO PDO
$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=" .$db_name.";host=".$db_host, $db_user, $db_pass);
