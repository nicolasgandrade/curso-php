<?php

    $arr = ["Olá", 1, 4, false, ", mundo", ['arr', 'array'], true, 12];

    $i = count($arr);
    $a = 0;

    while($a <= $i){

        if(is_string($arr[$a])){
            echo $arr[$a];
        }

        $a++;
        
    }