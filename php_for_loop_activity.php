<?php
for($i=1;$i<=50;$i++){
    if($i % 3 == 0 && $i % 5 == 0){
        $output = "Fizz Buzz";
    }
    elseif($i % 3 == 0){
        $output = "Fizz";
    }
    elseif($i % 5 == 0){
        $output = "Buzz";
    }
    else{
        $output = $i;
    }
    echo $output . "<br>";
}