<?php

    /*Podemos dividir um array grande em diversos arrays de número de elementos iguais;
    Vamos utilizar a função array_chunk;
    Passamos o array como argumento e também o número de elementos que cada array deve ter;
    */

    $arr = [1,2,3,4,5,6,7,8,9,10];

    $arrays = array_chunk($arr, 2);

    print_r($arrays);

    echo '<br>';

    print_r($arrays[2]);
    echo '<br>';

    print_r($arrays[4]);