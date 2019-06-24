<?php
//check if the GET has data.
if ($_GET['shoe_id']){
    $id = $_GET['shoe_id'];

    include 'config.php';

    $sql= "DELETE FROM `product` WHERE ID= '$id'";
    if (mysqli_query($conn,$sql)){
        echo "Deleted successfully";
        header('location:index.php');
    }else{
        echo "Deletion not successful";
    }
}
?>