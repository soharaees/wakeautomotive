<?php
$server_name='localhost';
$user_name='shaz';
$password='wake@8978';
$db_name='shaz';
 
 
$conn= mysqli_connect($server_name,$user_name,$password,$db_name);
if(mysqli_connect_error()){
    echo"connection failed";
}
else{
    echo"connection succesfull";
}

?>