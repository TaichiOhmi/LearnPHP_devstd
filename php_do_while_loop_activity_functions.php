<?php

    function CountUp($start, $end){
        do{
            echo $start." ";
            $start++;
        }while($start <= $end);
    }

    function CountDown($start, $end){
        do{
            echo $start." ";
            $start--;
        }while($start >= $end);
    }
