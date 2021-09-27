<?php

    /**Podemos criar novos índices com dados em um array;
     * Basta por o nome do array com o novo índice e atribuir um valor;
     * $arr[0] = 'teste';
     * 
     * Em arrays associativos basta utilizar a chave do valor para alterar;
    */

    $arr = [];

    print_r($arr);
    echo '<br>';

    $arr[0] = true;

    print_r($arr);