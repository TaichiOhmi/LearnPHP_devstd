<?php

    // Equals to  ==
    // Identical ===
    // Not Equal !=
    // Less than <
    // Less than or Equal to <=
    // Greater than >
    // Greater than or Equal to >=

    // "equals to" will return 'true' if x is equal to y.
    if ($x == $y) {

    }

    // "identical" will return 'true' if x is equal to y and has the same data type.
    if ($x === $y) {

    }

    // "not equal to" will return 'true if x is not equal to y.
    if ($x != $y) {

    }

    // "less than" will return 'true if x is less than y. 
    if ($x < $y) {

    }

    // "less than or equal to" will return 'true' if x is less than or equal to y.
    if ($x <= $y) {

    }

    // "greater than" will return 'true' if x is greater than y.
    if ($x > $y) {
        
    } 

    // "greater than or equal to" will return 'true' if x is greater than y or equal to y.
    if ($x >= $y) {

    } 


    // The if statement is used to execute a block of code only if the condition is true.
    $number = 20;
    if ($number > 0) {
        echo "$number is positive";
    }
    else {
        echo "$number is negative";
    }


    $check_num = 0;
    if ($check_num > 0) {
        echo "$check_num is positive";
    }
    elseif ($check_num < 0) {
        echo "$check_num is negative";
    }
    elseif ($check_num == 0) {
        echo "$check_num is zero";
    }
    else {
        echo "Error";
    }


    // multiple conditional statements
    // AND(&&) operators will return 'true' if x is equal to one and y is equal to one.
    if ($x == 1 && $y == 1) {

    }

    // OR(||) operators will return 'true' if either x is equal to one or y is equal to ten.
    if ($x == 1 || $y == 10) {

    }


?>