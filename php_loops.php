<?php

    // for loop -loops through a block of code on a specified number of times and if the condition is true.
    for($num = 0; $num <= 5; $num++) {
        echo $num." ";
    }
    echo "<br>";

    $num = 10;
    // while loop -loops through a block of code as long as the condition is true.
    while($num >= 1) {
        echo $num." ";

        $num--;
    }

    echo "<br>";
    // do loop -loops through a block of code once at first, then repeats it as long as the specified condition is still true
    do {
        echo $num."<br>";

        $num++;
    }while($num <= 20);

?>