<?php
/*
 * Write a PHP program to swap two variables.
 */
$var1 = 5;
$var2 = 10;
$temp = '';
echo "var1 = {$var1} - var2 = {$var2}<br>";
list($var1,$var2) = array($var2,$var1);
/*$temp = $var1;
$var1 = $var2;
$var2 = $temp;*/
echo "var1 = {$var1} - var2 = {$var2}";