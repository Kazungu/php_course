<?php include 'header.php';?>
<?php
include 'config.php';
if (isset($_GET['shoe_name'])){
    $id = $_GET['shoe_id'];
    $name= $_GET['shoe_name'];
    $size = $_GET['shoe_size'];
    $price=$_GET['shoe_price'];
}
echo "<form action='update_handler.php' method='post'>
            <input type='text' name='shoe_id' hidden value='$id'>
            <input type='text' name = 'shoe_name' placeholder='Enter Name of the shoe' value='$name' required>
            <input type='number' name='shoe_size' placeholder='Enter shoe size' value='$size' required>
            <input type='number' name='shoe_price' placeholder='Enter shoe price' value='$price' required>
            <input type='submit' name='btn_update' value='Update'>
          </form>";
?>
<?php include 'footer.php';?>