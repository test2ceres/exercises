<?php
/*
 * Write a PHP program to print out the multiplication table upto 6*6
 */
for ($i = 1; $i < 7; $i++) {
    for ($j = 1; $j < 7; $j++) {
        if ($i == 1  && $j ==1 ) {
            echo  $i . "\t";
        }else {
            echo $i * $j . "\t";
        }
    }
    echo '<br/>';
}