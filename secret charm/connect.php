<?php

$host="localhost";
$user="root";
$pass="";
$db="secretcharm";
$con=new mysqli($host,$user,$pass,$db);
if($con->connect_error){
    echo "Failed to connect DB".$con->connect_error;
}
?>