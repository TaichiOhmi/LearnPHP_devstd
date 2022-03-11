<?php

    //Automatically
    $cars = array("Nissan", "Honda", "Ferrari", "BMW", "Lamborghini");
    //$cars = ["Nissan", "Honda", "Ferrari", "BMW", "Lamborghini"];

    //Manually
    // $cars[0] = "Nissan";
    // $cars[1] = "Honda";
    // $cars[2] = "Ferrari";
    // $cars[3] = "BMW";
    // $cars[4] = "Lamborghini";

    // $array_length = count($cars);

    // echo "Thre are ".$array_length." value/s inside the array. <br>";
    // print_r($cars)

    // for($i = 0;$i < $array_length; $i++) {
    //     echo $cars[$i]."<br>";
    // }

    // foreach($cars as $car){
    //     echo $car."<br>";
    // }



    //Associative Arrays

    //Automatically
    //$food = array("Japanese"=>"Ramen","Italian"=> "Carbonara","American"=>"Hamburger")
    $food =["Japanese"=>"Ramen","Italian"=> "Carbonara","American"=>"Hamburger"];

    //Manuallty
    // $food["Japanese"]= "Ramen";
    // $food["Italian"]= "Carbonara";
    // $food["American"]= "Hamburger";

    // echo $food["Japanese"]."<br>";//Ramen
    // echo $food["Italian"]."<br>";//Carbonara
    // echo $food["American"]."<br>";//Hamburger


    foreach($food as $cuisine => $dish) {
        echo "Cuisine: ".$cuisine."<br>"."Dish: ".$dish."<hr>";
    }

?>