<?php

$dsn = 'mysql:dbname=chattp;host=localhost';
$user = 'root';
$password= '';

$chat = new PDO($dsn, $user, $password);

session_start();

?>