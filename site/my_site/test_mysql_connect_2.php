<?php

try {
    $dbname   = getenv('MYSQL_DATABASE');
    $user     = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $dbh      = new PDO(
        'mysql:host=mysqldb;port=3306;charset=utf8;dbname=' . $dbname,
        $user,
        $password
    );

    $rows = $dbh->query('SELECT @@version');
    echo "<xmp>";
    foreach ($rows as $row) {
        print_r($row);
    }
    echo "</xmp>";
} catch (PDOException $e) {
    printf("Error: %s", $e->getMessage());
}