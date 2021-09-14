<?php

    $a = 10;

    while($a > 0){
        
        if($a == 5 || $a == 7){

            echo "Pulou a execução <br>";
            $a--;
            continue;

        }

        echo $a . "<br>";


        $a--;

    }