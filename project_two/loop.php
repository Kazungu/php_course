<?php
$result = "SELECT * FROM `product`";
$fetchResults = mysqli_query($conn,$result);

while($row = mysqli_fetch_assoc($fetchResults)){
    extract($row);
    echo "     <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$size</td>
                <td>$price</td>
                <td><a href='#' class='btn btn-danger'>Delete</a> </td>
                <td><a href='#' class='btn btn-info'>Update</a> </td>
               </tr>";
}