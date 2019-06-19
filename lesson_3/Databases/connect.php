<?php
$servername = 'localhost';
$username = 'root';
$password = '';

#connecting or creating a database.
$conn = new mysqli($servername,$username,$password);
#check connection.
if($conn->connect_error){
    die("Connection failed ".$conn->connect_error );

}else{
    echo "connection successful";
}
mysqli_close($conn);

?>