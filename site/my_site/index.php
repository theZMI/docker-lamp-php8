<?php

// Test DB-connection:
try {
    $dbh = new PDO(
        'mysql:host=mysqldb;port=3306;charset=utf8;dbname='.getenv('MYSQL_DATABASE'),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
    );
    echo "<h1>MySql version:</h1>";
    echo "<xmp>";
    foreach ($dbh->query('SELECT @@version') as $row) {
        $rand = mt_rand(1, 3);
        echo "RAND={$rand}<br>";
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}

// Test php:
//phpinfo();
die();