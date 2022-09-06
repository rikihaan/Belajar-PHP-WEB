<?php
// menangkap header yang di kirim dari browser atau client
$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello $client" . PHP_EOL;
