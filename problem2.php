<!-- $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
Sample Output :

PHP Tutorial
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial. -->
<?php 
    $var = "PHP Tutorial";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var;?></title>
</head>
<body>
    <h3><?php echo $var;?></h3>
    <p><?php echo "PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.";?></p>
    <p>Go to the <a href="#"><?php echo $var;?></a></p>
    
</body>
</html>