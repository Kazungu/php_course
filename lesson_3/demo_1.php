<?php
//php array
//An array stores multiple values in one single variable.
//An array is a special variable, which can hold more than one value at a time.
/*
$cars = array("Toyota", "Benz", "Ford", "BMW");
echo $cars[0]. "<br>";
echo $cars[1]. "<br>";
echo $cars[3]. "<br>";

echo count($cars)."<br>";

#looping through an array using a foreach loop.
foreach($cars as $car){
    echo $car."<br>";
}
*/
#looping through an array using a for loop.

/*for(init_count; test_count; increment_count){
    code to run
}

$count_cars = count($cars);
for($x = 0; $x< $count_cars; $x++){
    echo $cars[$x]."<br>";
}
>>uncomment the next line to activate code above. <<
*/

$fruits = array();
$fruits[0] = "Banana";
$fruits[1] ="Peach";
$fruits[2]="Orange";
$fruits[3] = "Apple";
$fruits[4] = "Avocado";

#get the number of items in the array using the count function.
$count_fruits = count($fruits);
echo "<h2>List of fruits</h2>";
for ($x=0; $x< $count_fruits; $x++){
    echo $x. ".".$fruits[$x]."<br>";
}
echo "<br><br>";

foreach ($fruits as $fruit){
    echo $fruit."<br>";
}

#associative arrays.
//Arrayed with named keys.
//method one of creating Associative arrays.
$clients = array("John"=> "Developer","Jane"=>"PM", "Maurice" =>"Account");
//method two.
$age = array();
$age['Peter'] = 30;
$age['Solomon'] = 23;
$age["Jane"] = 24;
$age["Rose"] = 45;

echo "Peter is ".$age['Peter']. " years old";

// looping through associative array.

foreach ($age as $x_key => $x_value){
    echo "KEY IS ". $x_key. " VALUE IS " . $x_value . "<br>";

}