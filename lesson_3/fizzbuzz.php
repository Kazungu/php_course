<?php
/*
for(init_count; test_count;increment){
    //code here
}
*/

for($x= 1;$x<101; $x++){
   if($x % 3 == 0 && $x % 5 == 0){
       echo "FizzBuzz";
    }elseif($x % 3 == 0){
        echo "Fizz <br>";
    }elseif ($x% 5== 0){
        echo"Buzz <br>";
    }else{
        echo $x."<br>";
    }
}