<?php

$dsn = 'mysql:dbname=chatTP;host=localhost';
$user = 'root';
$password= '';

$chat = new PDO($dsn, $user, $password);

session_start();

?>