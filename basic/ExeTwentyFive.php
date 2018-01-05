<?php
/*
 *  Write a PHP script to get the document root directory under which the current script is executing,
 * as defined in the server's configuration file.
 */
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo getcwd();