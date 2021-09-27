<?php

    /**Podemos adicionar um valor ao fim do array utilizando a tribuição
     * sem especificar um índice;
     * 
     * Ex:
     *      $arr[] = 5;
    */

    $arr = [1, 2, 3, 4];

    print_r($arr);

    echo '<br>';

    $arr[] = 5;

    print_r($arr);