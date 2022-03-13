<?php

    function CountUp($start, $end){
        while($start <= $end){
            echo $start." ";
            $start++;
        }
    }

    function CountDown($start, $end){
        while($start >= $end){
            echo $start." ";
            $start--;
        }
    }
