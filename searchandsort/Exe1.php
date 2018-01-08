<?php
/*
 * Write a PHP program to sort a list of elements using Quick sort.
 */
$arr = array(45, 32, 22, 30, 46, 39, 25, 18, 16);
function quickSort($array)
{
    $lenght = count($array);
    if ($lenght <= 1) {
        return $array;
    } else {
        $start = $array[0];
        $left = $right = array();
        for ($i = 1; $i < $lenght; $i++) {
            if ($array[$i] <= $start) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }

        }

        return array_merge(quickSort($left), array($start), quickSort($right));
    }
    return $array;

}

echo "Origin: ";
print_r($arr);
echo "<br>";
$result = quickSort($arr);
echo "Result: ";
print_r($result);
