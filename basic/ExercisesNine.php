<?php
/*
 * Write a PHP script, which changes the color of the first character of a word.
 */
$string = "PHP Tutorial";
$string = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $string);
//$string = preg_replace('/(\b[a-zA-Z])/','<span style="color:red;">\1</span>',$string);
echo $string . "<br>";

//TODO: use same preg_replace function to change color of first word on string.
$string2 = "find first of word on string";
$string2 = preg_replace('/find/', '<span style="color:blue;">\0</span>', $string2);
echo $string2;