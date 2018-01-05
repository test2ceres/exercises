<?php
/*
 *  Write a PHP script to compare the PHP version.
 * Note : Use version_compare() function and PHP_VERSION constant.
 */
if (version_compare('7.2.0', PHP_VERSION, '>' )) {
    echo "I am using version less than 7. - " . PHP_VERSION;
}
else
{
    echo "I am using version greater than 7. - " . PHP_VERSION;
}