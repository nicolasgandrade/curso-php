<?php

    /**A função array_reduce tem com objetivo reduzir um array a apenas um valor;
     * Podemos passar uma segunda função com parâmetro, para algum processo ser executado;
     * array_reduce($array, $funcao);
    */

    $arr = [0,1,2,3,4,5,6,7,8,9];

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

    //Imprimiu 45 que é a soma de todos os valores do array;