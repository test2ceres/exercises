<?php
$string = "PHP Tutorial";
$string = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$string);
//$string = preg_replace('/(\b[a-zA-Z])/','<span style="color:red;">\1</span>',$string);
echo $string;