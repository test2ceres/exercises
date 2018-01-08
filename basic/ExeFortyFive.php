<?php
/*
 * Write a PHP program to compute the sum of the digits of a number.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input number</h2>

<form method="post">
    <input type="text" name="number">
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $number = $_POST['number'];
    echo "Entered: {$number} <br>";
    $arr = str_split($number);
    echo "Sum number just entered: " . array_sum($arr);
}
?>
</body>
