<?php
/*
 * Write a PHP program to find the first non-repeated character in a given string.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input a string</h2>

<form method="post">
    <input type="text" name="textstring">
    <input type="submit">
</form>

<?php
if (isset($_POST['textstring'])) {
    echo "Entered: {$_POST['textstring']} <br>";
    $textstring = str_split($_POST['textstring']);
    $counts = array_count_values($textstring);
    foreach ($counts as $count) {
        if ($count == 1) {
            echo "The first non-repeated: " . array_search($count, $counts);
            break;
        }
    }
}
?>
</body>
