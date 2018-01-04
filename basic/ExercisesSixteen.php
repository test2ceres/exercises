<?php
$filename = 'Exercisesthirteen.php';
$countline = file($filename);
echo "Count number of lines in file {$filename} is: " . count($countline) . " line";