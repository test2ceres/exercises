<?php
/*
 * Write a PHP script, to check whether the page is called from 'https' or 'http'.
 */
if ($_SERVER['REQUEST_SCHEME'] == "http")
{
    echo 'This is HTTP';
}
else echo 'This is HTTPS';