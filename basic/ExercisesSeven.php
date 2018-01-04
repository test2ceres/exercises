<?php
/*
 * Write a PHP script to get the current file name
 */
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";

echo basename(__FILE__);
