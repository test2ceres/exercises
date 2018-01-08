<?php
/*
 * Write a PHP script, which changes the color of the first character of a word.
 */
$string = "PHP Tutorial";
$string = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$string);
//$string = preg_replace('/(\b[a-zA-Z])/','<span style="color:red;">\1</span>',$string);
echo $string;

//TODO: use same preg_replace function to change color of first word on string.