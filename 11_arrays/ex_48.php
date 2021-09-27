<?php

    /**Crie um array com os valores: batata, maçã, pêra, feijão, arroz;
     * Remova pera e feijão;
    */

    $arr = ['batata', 'maçã', 'pêra', 'feijão', 'arroz'];

    array_splice($arr, 2, 1);
    array_splice($arr, 2, 1);

    print_r($arr);