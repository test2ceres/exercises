<?php
/*
 * Write a PHP program to print out the sum of pairs of numbers of
 * a given sorted array of positive integers which is equal to a given number.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input number</h2>

<form method="post">
    <label>Mod: <input type="text" name="txtmod"></label><br>
    <input type="submit" value="Submit">
</form>

<?php
$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = implode(', ', $arr);
echo "Array: {$str}<br>";
if (!empty($_POST)) {
    $mod = $_POST['txtmod'];
    echo "Mod just entered: {$mod}<br>";
    echo "Result: ";
    for ($a = 0; $a <= count($arr); $a++) {
        for ($b = 1; $b < count($arr); $b++) {
            if ($a + $b == $mod) {
                echo "({$a}, {$b}); ";
            }
        }
    }
}
?>
</body>