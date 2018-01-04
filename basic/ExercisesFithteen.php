<?php
$filename = 'ExercisesOne.php';
if (file_exists($filename)) {
    echo "{$filename} is modifield: ".date ("F d Y H:i:s.", filemtime($filename));
}