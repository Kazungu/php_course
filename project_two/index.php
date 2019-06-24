<?php include 'header.php';?>
<?php
include 'config.php';
    echo "
<div class=\"container\">
  <h2>Shoe table</h2>
  <p>List of exclusive shoes:</p>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Size</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>";
    ?>
  <?php
  //query/request
  $results = "SELECT * FROM `product`";
  #store the result/gragg the result
  $fetchResults = mysqli_query($conn, $results);
  while ($row = mysqli_fetch_assoc($fetchResults)){
      extract($row);
      echo "<tr>
            <td>$ID</td>
            <td>$Name</td>
            <td>$size</td>
            <td>$price</td>
            <td><a href='delete.php?shoe_id=$ID' class='btn btn-danger'>Delete</a></td>
            <td><a href='update.php?shoe_id=$ID&shoe_name=$Name&shoe_size=$size&shoe_price=$price' class='btn btn-info'>Update</a></td>
            
           </tr>";
  }
  ?>
<?php
    echo "<form action='product_handler.php' method='post'>
            <input type='text' name = 'shoe_name' placeholder='Enter Name of the shoe' required>
            <input type='number' name='shoe_size' placeholder='Enter shoe size' required>
            <input type='number' name='shoe_price' placeholder='Enter shoe price' required>
            <input type='submit' name='btn_submit' value='Save'>
          </form>"
?>



<?php include 'footer.php';?>


