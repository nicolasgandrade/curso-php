<?php

    /**A função in_array verifica se um item passado por parâmetro está no array;
     * O retorno é booleano;
     * Vamos passar dois argumentos para a função, ex:
     * in_array("item", $array);
    */

    $arr = ['banana', 'maça', 'mamao'];

    if(in_array('banana', $arr)){
        echo "tem banana";
    }else{
        echo "Não tem banana";
    }