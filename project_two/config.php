<?php

//create a connection
$conn = mysqli_connect('localhost','root','','project_two');

//check connection
 if(!$conn){
     die("Connection not succesful ". mysqli_connect_error($conn));

 }