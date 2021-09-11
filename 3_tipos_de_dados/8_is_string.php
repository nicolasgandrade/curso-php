<?php

    //Verificando se um dado é string

    $str = 'Nicolas';
    $num = 17;

    if(is_string($str)){
        echo "Meu nome é $str";
    }

    if(is_string($num)){
        echo 'é string';
    } else {
        echo ", e tenho $num anos";
    }