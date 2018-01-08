<?php
/*
 * Write a PHP program to sort a list of elements using Gnome sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function gnomeSort($array)
{
    $i = 1;
    while ($i < count($array)) {
        if ($array[$i] >= $array[$i - 1]) {
            $i++;
        } else {
            $temp = $array[$i];
            $array[$i] = $array[$i - 1];
            $array[$i - 1] = $temp;
            if ($i > 1) {
                $i--;
            }
        }
    }
    return $array;
}

$result = gnomeSort($arr);
print_r($result);

