<?php

$testMariaDb = function () {
    $mysqli = new MySQLi("mariadb","user","pass","appdb");
    return $mysqli->connect_errno ? "Failed to connect to MySQL: {$mysqli->connect_error}" : "MySQL connected";
};

echo $testMariaDb() . "<br>";
die("END");