<?php

$start = microtime(true);
$response = file_get_contents('http://slow-valet.test');
$elapsed = microtime(true) - $start;

echo "file_get_contents results:\n";
var_dump($response);
var_dump($elapsed);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://slow-valet.test');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$start = microtime(true);
$response = curl_exec($ch);
$elapsed = microtime(true) - $start;

curl_close($ch);

echo "Curl results:\n";
var_dump($response);
var_dump($elapsed);
