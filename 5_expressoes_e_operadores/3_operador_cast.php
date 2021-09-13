<?php

    //É um operador que converte os tipos de dados

    $a = "10";

    echo $a + 10 . "<-- Isso é uma soma com string";
    echo "<br>";

    $a = (int) "10";

    echo $a + 10 . "<-- Isso é uma soma de inteiros";
    echo "<br>";
    
    if($a === 10){
        echo '$a é idêntico a 12';
    }