<?php

$time = date('d-m-Y H:i:s');
echo "Hello world. Current time = {$time}<br>";

$print = function($msg) {
    echo "Message: $msg<br>";
};

for ($i = 0; $i < 10; $i++) {
    $print($i);
}