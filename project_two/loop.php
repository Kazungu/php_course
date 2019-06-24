<?php
//query/request
$results = "SELECT * FROM `product`";
#store the result/gragg the result
$fetchResutls = mysqli_query($conn, $results);
while ($row = mysqli_fetch_assoc($fetchResutls)){
    extract($row);
    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$size</td>
            <td>$price</td>
            <td><a href='#' class='btn btn-danger'>Delete</a></td>
            <td><a href='#' class='btn btn-info'>Update</a></td>
            
           </tr>";
}
?>