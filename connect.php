<?php
$server_name='';
$user_name='';
$password='';
$db_name='';
 
$conn= mysqli_connect($server_name,$user_name,$password,$db_name);
if(mysqli_connect_error()){
    echo"connection failed";
}
?>