<?php
/*
 * Write a simple PHP program to check that emails are valid.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your email</h2>

<form method="post">
    <input type="text" name="mail">
    <input type="submit">
</form>

<?php
//TODO: test with " test3.ceres@gmail.com" ==> invalid?
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    if (FiLTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
        echo "{$mail} is valid";
    } else echo "{$mail} is invalid";
}
?>
</body>
