<?php
    if(isset($_COOKIE['name'])){
        $name = $_COOKIE['name'];
    } else {
        $name = 'Гость';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page</title>
    </head>
    <body>
        <h1>Page</h1>
        <a href="index.php">Index</a>
        <p> Hello, <?php echo $name; ?> </p>
    </body>
</html>
