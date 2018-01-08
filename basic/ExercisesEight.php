<?php
/*
 * Write a PHP script, which will return the following components of the url
 */
$url = 'http://exercises.local/basic/exerciseseight.php';
echo "{$url}<br>";
$url = parse_url($url);

echo "Scheme: {$url['scheme']}<br>";
echo "Host: {$url['host']}<br>";
echo "Path: {$url['path']}<br>";


//TODO: how do you get 'host' name from url with one line?
echo "get host name with one line: <b>" . parse_url('http://exercises.local/basic/exerciseseight.php', PHP_URL_HOST);