<?php
/*
 *  Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.
 */
$d = "A00";
/*for ($i = 0; $i < 10; $i++)
{
    $d++;
    echo "{$d} <br>";
}*/
for ($i = 0; $i < 10; $i++)
{
    echo ++$d. "<br>";
}