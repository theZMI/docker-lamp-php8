<?php

try {
    $dbh  = new PDO(
        'mysql:host=mysqldb;port=3306;charset=utf8;dbname=' . getenv('MYSQL_DATABASE'),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
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