<?php
if (isset($_POST['btn_submit'])){
    $name= $_POST['shoe_name'];
    $size = $_POST['shoe_size'];
    $price= $_POST['shoe_price'];

    //include if you do want to halt the execution of the file. Return error if the file not found.
    include 'config.php'; //create and check connection.

    $sql = "INSERT INTO `product`(`ID`, `Name`, `size`, `price`)
            VALUES (null,'$name','$size','$price')";
    //save data to db
    if (mysqli_query($conn,$sql)){
        echo "<h1>success</h1>";
        header('location:index.php');
    }else{
        echo 'save data unsuccessful '.mysqli_error();
    }
}

?>
