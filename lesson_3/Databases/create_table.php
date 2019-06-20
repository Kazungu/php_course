<?php
$conn = new mysqli('localhost','root','','mit_evening');

if ($conn ->connect_error){
    die("connection failed ". $conn->connect_error);
}
$sql = 'CREATE TABLE student(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(200) NOT NULL,
lastname VARCHAR(200) NOT NULL ,
reg_date TIMESTAMP DEFAULT  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 

);';

if($conn->query($sql)=== TRUE){
    echo 'The student table is created successfully';
}else{
    echo"ERROR: ".$sql . "<br>". $conn->error;
}

$sql = "INSERT INTO student(firstname,lastname,reg_date)
        VALUES('Terry', 'Mukiri',NULL);";
if($conn->query($sql) === TRUE){
    echo "new data entered successfully";
}else{
    echo "Error: ".$sql. "<br>". $conn->error;
}
mysqli_close($conn);
