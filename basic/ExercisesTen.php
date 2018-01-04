<?php
if (isset($_SERVER['HTTP']))
{
    echo 'This is HTTP';
}
else echo 'This is HTTPS';