<?php
/*
 * Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your number</h2>

<form method="post">
    <label>Number 1: <input type="text" name="number1"></label><br>
    <label>Number 2: <input type="text" name="number2"></label><br>
    <label><input type="submit"></label>
</form>

<?php
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if ($number1 < $number2) {
        list($number1, $number2) = array($number2, $number1);
    }
    $mod = (int)($number1 / $number2);
    $result = $number1 - ($number2 * $mod);
    echo $result;
}
?>
</body>