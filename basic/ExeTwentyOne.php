<?php
/*
 * Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.
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
    <input type="submit">
</form>

<?php
if (isset($_POST['number'])) {
    $num = $_POST['number'];
    /*if ($num > 30) {
        echo "{$num} greater than 30";
    } elseif ($num > 20) {
        echo "{$num} greater than 20";
    } elseif ($num > 10) {
        echo "{$num} greater than 10";
    }*/

    $result = $num > 30 ? "{$num} greater than 30"
        : ($num > 20 ? "{$num} greater than 20" :
            ($num > 10 ? "{$num} greater than 10"
                : "{$num} don't greater than 10. Input a number atleast greater than 10!"));
    echo $result;
}

?>
</body>
