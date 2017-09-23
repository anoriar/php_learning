<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

// данные можно взять через массив $_GET (если в форме get): $_GET['submit']
// можно через $_POST аналогично (если в форме post)
// универсальный метод ниже
include_once 'functions.php';
if (filter_input(INPUT_GET, 'submit')) {
    $a = filter_input(INPUT_GET, 'a');
    $b = filter_input(INPUT_GET, 'b');
    $c = filter_input(INPUT_GET, 'c');

    if (!empty($a) && !empty($b) && !empty($c)) {
        $res = quadratic($a, $b, $c);
        if($res == false){
            echo "Корней нет<br>";
        } else{
            print_r($res);
        }
        echo "Форма заполнена A = $a B = $b C = $c";
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="index.php" method="post">
                A: <input type="text" name="a" value="" /><br>
                B: <input type="text" name="b" value="" /><br>
                C: <input type="text" name="c" value="" /><br>
                <input type="submit" value="Submit" name="submit" />
            </form>
        </div>
    </body>
</html>
