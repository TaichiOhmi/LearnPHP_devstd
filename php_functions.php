<?php

    function displayMessage() {

        echo "Hello World <br>";

    }

    function displayGreetings($first_name, $last_name, $country) {

        echo "Hello, $first_name $last_name <br>";
        echo "You are from $country <br>";

    }

    function getSum($first_number, $second_number) {
        
        return $first_number + $second_number;

    }

    displayMessage();
    displayGreetings("Portgas", "D. Ace", "Baterilla of South Blue");
    displayGreetings("Naruto", "Uzumaki", "fictional village of Konohagakure");
    echo "Sum: ".getSum(11, 185)

?>