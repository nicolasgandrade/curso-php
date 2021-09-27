<?php

    /**Para ordenar em ordem crescente opodemos utilizar a função sort em um array;
     * Para ordenar de forma inversa, utilizamos a rsort;
    */

    $arr = [1,2,3,4,5,6,7,8,9];

    sort($arr);

    print_r($arr);
    echo '<br>';

    rsort($arr);

    print_r($arr);
    echo '<br>';