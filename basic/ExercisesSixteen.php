<?php
/*
 * Write a PHP script to count number of lines in a file.
 * Note : Store a text file name into a variable and count the number of lines of text it has.
 */
$filename = 'Exercisesthirteen.php';
$countline = file($filename);
echo "Count number of lines in file {$filename} is: " . count($countline) . " line";