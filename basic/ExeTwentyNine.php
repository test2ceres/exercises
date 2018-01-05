<?php
/*
 * Write a PHP script to get the names of the functions of a module
 */
print_r(get_extension_funcs('xml'));
echo "<br>";
print_r(get_extension_funcs('json'));