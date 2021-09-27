<?php

    /**Para somar os itens de um array utilizamos a função array_sum;
     * Ela nos retorna a soma de todos os elementos numéricos do array que passamos
     * como argumento;
    */

    $arr = [1,2,3,4,5,6,7,8,9];

    $soma = array_sum($arr);

    echo $soma;