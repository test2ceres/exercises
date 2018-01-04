<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h2>Please input your name</h2>

<form method="post">
    <input type="text" name="username">
    <input type="submit">
</form>

<?php
if (isset($_POST['username'])) {
    $user = $_POST['username'];
    echo "<h5>Hello {$user}</h5>";
}
?>
</body>
