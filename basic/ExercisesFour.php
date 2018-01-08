<?php
/*
 * Create a simple HTML form and accept the user name and display the name through PHP echo statement.
 */
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your name</h2>

<form method="post">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_POST)) {
    $user = $_POST['username'];
    echo "<h5>Hello {$user}</h5>";
}
?>
</body>
