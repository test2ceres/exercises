<?php
$url = 'http://exercises.local/basic/exerciseseight.php';
echo "{$url}<br>";
$url = parse_url($url);

echo "Scheme: {$url['scheme']}<br>";
echo "Host: {$url['host']}<br>";
echo "Path: {$url['path']}";