<?php
/*
 * Write a PHP script to get last modified information of a file.
 */
$filename = 'ExercisesOne.php';
if (file_exists($filename)) {
    echo "{$filename} is modifield: ".date ("F d Y H:i:s.", filemtime($filename));
}