<?php
$conn = new mysqli('localhost','root','','mit_evening');

if ($conn ->connect_error){
    die("connection failed ". $conn->connect_error);
}
/*
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
        VALUES('Rose', 'Njenga',NULL);";
/*
if($conn->query($sql) === TRUE){
    echo "new data entered successfully";
}else{
    echo "Error: ".$sql. "<br>". $conn->error;
}
if(mysqli_query($conn,$sql)){
    #get last item added into the database.
    $last_item = mysqli_insert_id($conn);
    echo "New Record added successfully";
    echo "record is : $last_item";
}else{
    echo "Error".$sql.mysqli_error($conn)."<br>";
}*/
//selecting data from a table(s)
//SELECT column_one, column_two FROM tablename
//SELECT * FROM tablename

$sql = "SELECT id, firstname,lastname FROM student";
$result = mysqli_query($conn,$sql);
//associative array key and value
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . " ". $row['id']." ". $row['firstname']. " ". $row['lastname']."<br>";
    }

}else{
    echo "no record found";
}




mysqli_close($conn);
