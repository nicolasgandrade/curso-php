<?php

    /**As funções retornam algo e utilizam a instrução return para isso;
     * O objetivo é armazenar o valor de retorno dentro de uma variável e utilizá-lo
     * posteriormente no código;
     * function a(x,y){
     *      return algumaCoisa;
     * }
    */

    function soma($a, $b){
        
        echo $a + $b.'<br>';

    }

    soma(1,2);

    function somaret($a, $b){

        return $a + $b.'<br>';

    }

    $x = somaret(2,4);
    echo $x;