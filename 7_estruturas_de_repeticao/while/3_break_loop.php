<?php

    $a = 0;

    while($a < 10){

        echo "A variável a é $a <br>";

        if($a === 5){
            echo 'A variável $a já chegou a 5, terminando o loop';
            break;
        }

        $a++;

    }