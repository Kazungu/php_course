<?php
//user hits the update button, this happens... grab data from the form and save in variables.
if (isset($_POST['btn_update'])){
    $id = $_POST['shoe_id'];
    $name = $_POST['shoe_name'];
    $size = $_POST['shoe_size'];
    $price = $_POST['shoe_price'];

    echo $id,$name,$size,$price;
    //create connection to db
    include 'config.php';
    //update sql query
    $sql = "UPDATE `product` SET `Name`='$name',`size`='$size',`price`='$price' WHERE ID= '$id'";

//save data to db
    if (mysqli_query($conn,$sql)){
        echo "shoe record updated successfully";
        header('location:index.php');
    }else{
        echo "update not successful";
    }

}

?>