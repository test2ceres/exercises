<?php
/*
 * Write a PHP script to get the directory path used for temporary files
 */
echo tempnam(sys_get_temp_dir(), "Tux");