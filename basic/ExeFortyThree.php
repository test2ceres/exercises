<?php
/*
 * Write a PHP program that multiplies corresponding elements of two given lists
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input number</h2>

<form method="post">
    <label>Array 1: <input type="text" name="arr1"></label><br>
    <label>Array 2: <input type="text" name="arr2"></label><br>
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $number1 = $_POST['arr1'];
    $number2 = $_POST['arr2'];
    $numarr1 = explode(' ', trim($number1));
    $numarr2 = explode(' ', trim($number2));

    echo "arr 1: ";
    print_r($numarr1);
    echo "<br>arr 2: ";
    print_r($numarr2);

    foreach ($numarr1 as $key => $value) {
        $rerult[$key] = $numarr1[$key] * $numarr2[$key];
    }
    echo "<br>Result: " . implode(', ', $rerult);
}
?>
</body>
