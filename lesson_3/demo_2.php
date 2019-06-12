<?php
//sorting arrays in php

//sorting arrays in ascending order.
//make use of the sort() function

$cars = array("BMW", "FORD", "AUDI", "VW");
$num_of_cars = count($cars);
for ($x = 0; $x<$num_of_cars; $x++){
    echo $x. $cars[$x]."<br>";
}

echo "<h2>After sorting</h2>";
sort($cars);
for ($x = 0; $x<$num_of_cars; $x++){
    echo $x. $cars[$x]."<br>";
}
echo "<br>";

// sorting in descending order. index array.
echo "<h2>After sorting</h2>";
rsort($cars);
for ($x = 0; $x<$num_of_cars; $x++){
    echo $x. $cars[$x]."<br>";
}

$clients = array("John"=> "Developer","Jane"=>"PM", "Maurice" =>"Account");
asort($clients);
foreach ($clients as $x_key => $x_value){
    echo "KEY IS $x_key . VALUE IS . $x_value.<br>";
}

ksort($clients); //sort using the key.
arsort($clients); //sorting is descending order using value.
krsort($clients); //sorting in descending order using the key.
