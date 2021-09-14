<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $x = count($arr);
    $y = 0;

    while($y < $x){
        
        if($arr[$y] == 30 || $arr[$y] == 40){

            $y++;

            continue;

        }

        echo $arr[$y] . "<br>";

        $y++;
    }