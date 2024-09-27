<?php

ini_set('display_errors', true);
ini_set('log_errors', true);
ini_set('error_reporting', E_ALL);
ini_set('error_log', __DIR__ . '/php_errors.log');

//echo "Gen error. {$undef}<br>";

$time = date('d-m-Y H:i:s');
echo "Hello world. Current time = {$time}<br>";

$print = function($msg) {
    echo "Message: $msg<br>";
};
for ($i = 0; $i < 10; $i++) {
    $print($i);
}

$arr = (require_once "./inc.php");
foreach ($arr as $v) {
    $print($v);
}

die('Done');