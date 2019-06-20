<?php
//create constant variables to be used.
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME', 'mit_evening');
//create connection
$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

//Check connection

if(!$conn){
    die("connection failed". mysqli_connect_error());
}

//DELETE FROM table_name WHERE id=id number
$sql = "DELETE FROM student WHERE id=26";
if (mysqli_query($conn,$sql)){
    echo "Record deleted";
}else{
    echo "Error deleting the specified record". mysqli_error($conn);
}
//SYNTAX TO UPDATE
//UPDATE table_name SET lastname = 'name' WHERE id=1
$sql= "UPDATE student SET lastname = 'Gathoni' WHERE id= 2";
if(mysqli_query($conn,$sql)){
    echo "successfully updated";
}else{
    echo "error updating ".mysqli_error($conn);
}

//close connection.
mysqli_close($conn);

