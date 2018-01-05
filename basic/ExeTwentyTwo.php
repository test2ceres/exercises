<?php
/*
 * Write a PHP script to get the full URL
 */
$protocol = !empty($_SERVER['HTTP']) ? "http" : "https";
echo $_SERVER['REQUEST_SCHEME'] . "://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];