<?php

    /**Podemos percurrer cada carcactere de uma string;
     * Para isso vamos utilizar uma estrutura de repetição;
     * E o método strlen, para saber o número de caracteres;
     * Com isso podemos iterar pela string completa;
     * 
    */

    $str = "Isso aqui e uma sting grande";

    for($i = 0; $i < strlen($str); $i++){
        echo "$str[$i] <br>";
    }
    