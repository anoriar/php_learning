<?php
   //соединение с бд: хост, логин, пароль, название бд

  $con = mysqli_connect('localhost', 'root', '', 'learn_php_db');
  mysqli_set_charset($con, 'utf8');
  if(mysqli_connect_errno()){
      echo 'Failed to connect to MySQL ' . mysqli_connect_error(); 
  }
 // $query = "INSERT INTO news VALUES (NULL, 'hhh', 'rrr', '2017-09-19 15:52:00', 'aut')";
 // $info = mysqli_query($con, $query);
 // var_dump($info);
 $selectQuery = "SELECT * FROM news";
 $result = mysqli_query($con, $selectQuery);
 $count = mysqli_num_rows($result);
 while($row = mysqli_fetch_array($result)){
     echo $row['h1'];
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
       
    </body>
</html>
