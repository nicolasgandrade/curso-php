<?php

    /**Com a função array_slice podemos resgatar uma faixa de elementos de um array;
     * Passamos 3 parâmetros: o array, índice inicialm e quantos elementos queremos
     * resgatar a partir do índice;
    */

    $arr = [1,2,3,4,5,6,7,8,9];

    $slice1 = array_slice($arr, 2, 3);

    print_r($slice1);