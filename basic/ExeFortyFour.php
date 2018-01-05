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
    <label>Array: <input type="text" name="txtarray"></label><br>
    <label>Mod: <input type="text" name="txtmod"></label><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['txtarray']) && isset($_POST['txtmod'])) {
    $arrtxt = $_POST['txtarray'];
    $mod = $_POST['txtmod'];
    $i = 0;
    $string = '';
    while ($i < $arrtxt) {
        $string .= $i . ", ";
        $i++;
    }
    echo "Array just entered: {$string}<br>";
    echo "Mod just entered: {$mod}<br>";

    $arr = str_split($string);
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