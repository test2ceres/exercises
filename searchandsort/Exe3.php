<?php
/*
     * Write a PHP program to sort a list of elements using Insertion sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function insertionSort($array)
{
    for ($i = 1; $i < count($array); $i++) {
        $x = $i - 1;
        $temp = $array[$i];
        while ($x >= 0 && $array[$x] > $temp) {
            $array[$x + 1] = $array[$x];
            $x--;
        }
        $array[$x + 1] = $temp;
    }
    return $array;
}

$result = insertionSort($arr);
print_r($result);

