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
function checknumber()
{
    if (isset($_POST['number'])) {
        $num = $_POST['number'];
        if ($num > 30) {
            echo "{$num} greater than 30";
        } elseif ($num > 20) {
            echo "{$num} greater than 20";
        } elseif ($num > 10) {
            echo "{$num} greater than 10";
        }

    }
}
checknumber();

?>
</body>
