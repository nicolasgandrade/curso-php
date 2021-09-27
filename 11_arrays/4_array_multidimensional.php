<?php

    /**Uma array multideminsional é um array que contém outros arrays;
     * O array que guarda os outros é o array matriz;
     * Para acessar esse tipo de arrau também utilizamos índices, acessando o externo depois 
     * o interno;
     * 
     * $arr[1][0] => Primeiro elemento do segundo array;
    */

    $arrMatriz = [1, 2, 3, [1, 2, 3, 4], 5, 6, [1, 2, 3, 4, 5 ,6]];

    print_r($arrMatriz);
    echo '<br>';

    echo $arrMatriz[3][1];