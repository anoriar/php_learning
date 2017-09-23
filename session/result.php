<?php

session_start();
$answer3 = $_POST['answer3'];
$answer2 = $_SESSION['answer2'];
$answer1 = $_SESSION['answer1'];

function getResult($answer1, $answer2, $answer3){
    if($answer3 == 8 && $answer2 == 6 && $answer1 == 4)
        return '+';
    else
        return '-';
}

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
       <?php echo getResult($answer1, $answer2, $answer3); ?> 
    </body>
</html>