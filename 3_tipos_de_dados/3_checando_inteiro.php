<?php

    //Cheacando se um dado é número inteiro

    if(is_int(9.1)){
        echo 'O número é um inteiro <br>';
    }else{
        echo 'Não é um inteiro <br>';
    }

    $n = 28;

    if(is_int($n)){
        echo 'A variável "n" é um inteiro';
    } else{
        echo 'A variavel "n" não é um inteiro';
    }