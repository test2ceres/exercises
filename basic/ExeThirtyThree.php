<?php
/*
 * Write a PHP program to convert word to digit.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your word</h2>

<form method="post">
    <input type="text" name="word">
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $word = $_POST['word'];
    $nums = array('zero',
        'one',
        'two',
        'three',
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
        'ten');
    $lenght = count($nums);
    $temp = '';
    for ($i = 0; $i < $lenght; $i++) {
        if ($word == $nums[$i]) {
            $temp = $i;
            break;
        }
    }
    echo $temp;
}
?>
</body>
