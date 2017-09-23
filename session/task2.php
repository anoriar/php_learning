<?php

session_start();
$_SESSION['answer1'] = $_POST['answer1'];

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
        <form action="task3.php" method="POST">
            <p>Вопрос 2:</p>
            <p>3 + 3:</p>
            <input type="text" name="answer2" value="" />
            <input type="submit" value="Ответить" name="submit" />
        </form>
    </body>
</html>