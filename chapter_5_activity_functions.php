<?php

    function Addition($first, $second) {
        return $first + $second;
    }

    function Subtraction($first, $second) {
        return $first - $second;
    }

    function Multiplication($first, $second) {
        return $first * $second;
    }

    function Division($first, $second) {
        return $first / $second;
    }

    function Modulo($first, $second) {
        return $first % $second;
    }

    function Exponential($first, $second) {
        return $first ** $second;
        // return pow($first, $second);
    }

    ?>



    <!-- if(isset($_POST['firstnumber']) && isset($_POST['secondnumber']) && !isset($_POST['options'])){
        $result = 'You must select a method of arithmetic operation';
    }
    else{
        $method = $_POST['options'];
        $first = $_POST['firstnumber'];
        $second = $_POST['secondnumber'];

        if($method == "addition"){
            $result = Addition($first, $second);
        }

        elseif($method == "subtraction"){
            $result = Subtraction($first, $second);
        }

        elseif($method == "multiplication"){
            $result = Multiplication($first, $second);
        }

        elseif($method == "division"){
            $result = Division($first, $second);
        }

        elseif($method == "modulo"){
            $result = Modulo($first, $second);
        }

        elseif($method == "exponential"){
            $result = pow($first, $second);
        }
    } -->