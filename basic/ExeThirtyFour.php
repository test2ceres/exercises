<?php
/*
 * Write a PHP program to check the bits of the two given positions of a number are same or not.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your number</h2>

<form method="post">
    <label>Number: <input type="text" name="number"></label><br>
    <label>Position 1: <input type="text" name="pos1"></label><br>
    <label>Position 2: <input type="text" name="pos2"></label><br>
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $number = $_POST['number'];
    $convertbit = decbin($number);
    echo "Bit: {$convertbit}<br>";
    $arr = str_split($convertbit);
    if (isset($_POST['pos1']) && isset($_POST['pos2'])) {
        $pos1 = $_POST['pos1'];
        $pos2 = $_POST['pos2'];
        if ($arr[$pos1] == $arr[$pos2]) {
            echo "Result: true";
        } else {
            echo "Result: false";
        }
    }
}
?>
</body>
