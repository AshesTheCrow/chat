<?php

// $dsn = 'mysql:dbname=chattp;host=localhost';
// $user = 'root';
// $password= '';

$dsn = 'mysql:dbname=dbs8004344;host=db5009437195.hosting-data.io';
$user = 'dbu2336936';
$password= 'f7dM5CE6r';

$chat = new PDO($dsn, $user, $password);

session_start();

?>