<?php

    /**Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função asort;
     * Para reverter: arsort
     * Se quisermos ordenar o array pelas chaves, utilizamos a função ksort;
     * Para reverter: krsort;
    */

    $arr = ['nome' => 'Nicolas', 'idade' => 17, 'amigos' => 0];

    asort($arr);
    print_r($arr);

    echo '<br>';

    ksort($arr);
    print_r($arr);

    echo '<br>';

    arsort($arr);
    print_r($arr);