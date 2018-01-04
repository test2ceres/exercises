<?php
/*
 * $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
 */
$var = 'PHP Tutorial';
?>

<!DOCTYPE html>
<head>
    <title><?php echo $var;?></title>
</head>
<body>
<h3><?php echo $var;?></h3>
<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
    Go to the <?php echo $var;?>.</p>
</body>