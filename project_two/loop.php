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
            <td><a href='#' class='btn btn-danger'>Delete</a></td>
            <td><a href='#' class='btn btn-info'>Update</a></td>
            
           </tr>";
}
?>