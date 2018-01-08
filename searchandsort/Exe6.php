<?php
/*
 *Write a PHP program to sort a list of elements using Bubble sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function bubbleSort($array)
{
    $lenght = count($array);
    for ($i = 0; $i < $lenght - 1; $i++) {
        for ($j = $lenght - 1; $j > $i; $j--) {
            if ($array[$j] < $array[$j - 1]) {
                $temp = $array[$j - 1];
                $array[$j - 1] = $array[$j];
                $array[$j] = $temp;

            }
        }

    }
    return $array;

}

$result = bubbleSort($arr);
print_r($result);

