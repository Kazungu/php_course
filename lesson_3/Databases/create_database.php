<?php
$conn = new mysqli('localhost','root','');
if($conn->connect_error){
    die("connection failed ".mysqli_connect_error());
}
#creating a db. create a variable to store the instructions.
$sql ='CREATE DATABASE mit_evening';

if($conn->query($sql)=== TRUE){
    echo"Database created succesfully";
}else{
    echo "creation of database unseccesfull";
}
mysqli_close($conn);
