<?php

    /**Removendo os elementos:
     * 
     * Podemos remover os elementos de um array com a função array_splice;
     * Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover;
     * array_splice($arr, 2, 1+ => A partir do índice 2, remove 1 elemento);
    */

    $arr = [0,1,2,3,4,5,6,7];

    array_splice($arr, 0, 1);

    print_r($arr);