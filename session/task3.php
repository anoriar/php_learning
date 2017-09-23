<?php

session_start();
$_SESSION['answer2'] = $_POST['answer2'];

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="result.php" method="POST">
            <p>Вопрос 3:</p>
            <p>4 + 4:</p>
            <input type="text" name="answer3" value="" />
            <input type="submit" value="Ответить" name="submit" />
        </form>
    </body>
</html>