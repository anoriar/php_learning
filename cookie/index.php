<?php
    if(isset($_POST['submit']) && !empty($_POST['name'])){
        $name = $_POST['name'];
        setcookie('name', $name, time() + 70000);
    } elseif(isset($_COOKIE['name'])){
        $name = $_COOKIE['name'];
    } else {
        $name = 'Гость';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body>
        <h1>Index</h1>
        <a href="page.php">Page</a>
        <p> Hello, <?php echo $name; ?> </p>
        <form method="post">
            <input type="text" name="name" value="" />
            <input type="submit" value="Submit" name="submit" />
        </form>
    </body>
</html>
