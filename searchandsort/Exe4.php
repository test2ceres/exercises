<?php
/*
 * Write a PHP program to sort a list of elements using Selection sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $posmin = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$posmin]) {
                $posmin = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $array[$posmin];
        $array[$posmin] = $temp;
    }
    return $array;
}
$result = selectionSort($arr);
print_r($result);
