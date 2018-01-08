<?php
/*
 *Write a PHP program to sort a list of elements using Cocktail sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function cocktailSort($array)
{
    do {
        $flag = false;
        for ($i = 0; $i < count($array); $i++) {
            if (isset($array[$i + 1])) {
                if ($array[$i + 1] < $array[$i]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$i + 1];
                    $array[$i + 1] = $temp;
                    $flag = true;
                }
            }
        }
        if ($flag == false)
            break;
        $flag = false;
        for ($i = count($array) - 1; $i >= 0; $i--) {
            if (isset($array[$i - 1])) {
                if ($array[$i] < $array[$i - 1]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$i - 1];
                    $array[$i - 1] = $temp;
                    $flag = true;
                }
            }
        }
    } while ($flag);
    return $array;

}

$result = cocktailSort($arr);
print_r($result);

