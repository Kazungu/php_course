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
        <th>Name</th>
        <th>Size</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>";
    include 'loop.php';
    echo"
    </tbody>
  </table>
</div>";

    echo "<form action='product_handler.php' method='post'>
            <input type='text' name = 'shoe_name' placeholder='Enter Name of the shoe' required>
            <input type='number' name='shoe_size' placeholder='Enter shoe size' required>
            <input type='number' name='shoe_price' placeholder='Enter shoe price' required>
            <input type='submit' name='btn_submit' value='Save'>
          </form>"
?>



<?php include 'footer.php';?>


