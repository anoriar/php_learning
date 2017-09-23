<?php

require_once 'classes.php';

$publications = array();

$con = mysqli_connect('localhost', 'root', '', 'news_blog');
mysqli_set_charset($con, 'utf8');
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL ' . mysqli_connect_error(); 
}

 $selectQuery = "SELECT * FROM publication";
 $result = mysqli_query($con, $selectQuery);
 while($row = mysqli_fetch_array($result)){
     $publications[] = new $row['type']($row);
 }
