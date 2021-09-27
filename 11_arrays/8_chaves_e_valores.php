<?php

    /**Chaves e valores:
     * Com a função array_keys recebemos um array com apenas as chaves de um array;
     * Com a função array_values recebemos um array com apenas os valores de um array;
    */

    $arr = ['Nome' => 'Nicolas', 'Idade' => 17, 'Amigos' => 0];

    $chaves = array_keys($arr);

    print_r($chaves);
    echo '<br>';

    $valores = array_values($arr);

    print_r($valores);
    echo '<br>';