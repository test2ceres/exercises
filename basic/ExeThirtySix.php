<?php
/*
 * Write a PHP program to test if a given string occurs at the end of another given string
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input a string</h2>

<form method="post">
    <label>String 1: <input type="text" name="string1"></label><br>
    <label>String 2: <input type="text" name="string2"></label><br>
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $str1 = $_POST['string1'];
    $str2 = $_POST['string2'];
    echo "String 1: {$str1} <br>";
    echo "String 2: {$str2} <br>";

    $lenstr1 = strlen($str1);
    $lenstr2 = strlen($str2);
    $position = $lenstr1 - $lenstr2;

    if (substr($str1, $position) == $str2) {
        echo "true";
    } else {
        echo "false";
    }
}
?>
</body>
