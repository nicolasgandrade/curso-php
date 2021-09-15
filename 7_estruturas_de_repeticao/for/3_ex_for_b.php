<?php

    $arr = []; // Deve ser de 1 a 10
    $el = 1;

    for($i = 0; $i < 10; $i++){

        array_push($arr, $el);
        $el++;

    }

    print_r($arr);