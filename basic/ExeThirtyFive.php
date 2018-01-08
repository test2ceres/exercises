<?php
/*
 *  Write a PHP program to remove duplicates from a sorted list.
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
    $unique = array_unique($arr);
    sort($unique);
    $num = (int)implode($unique);
    echo "Removed duplicates: {$num}";

}
?>
</body>
