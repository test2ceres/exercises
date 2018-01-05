<?php
/*
 * Write a PHP program to check if a number is an Armstrong number or not.
 * Return true if the number is Armstrong otherwise return false.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your number</h2>

<form method="post">
    <input type="text" name="number">
    <input type="submit">
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $lenght = strlen($number);
    $sum = 0;
    $number = (string)$number;
    for ($i = 0; $i < $lenght; $i++) {
        $sum = $sum + pow((string)$number{$i}, $lenght);
    }
    if ((string)$number == (string)$sum) {
        echo "true";
    } else {
        echo "false";
    }
}
?>
</body>
