<?php
/*
 * Write a PHP program to compute the sum of the prime numbers less than 100
 * Note: There are 25 prime numbers are there in less than 100.
 * 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61,
 * 67, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060.
 */
$sum = 0;
$num = 2;
while ($num < 100) {
    $count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        $sum += $num;
    }
    //echo $num . " - ";
    $num++;
}
echo $sum;