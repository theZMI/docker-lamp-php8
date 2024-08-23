<?php

$server   = "mysqldb";
$dbname   = getenv('MYSQL_DATABASE');
$user     = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    $conn = mysqli_connect($server, $user, $password, $dbname);
} catch (\Throwable $e) {
    print_r($e);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";