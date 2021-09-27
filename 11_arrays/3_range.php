<?php

    /**Para criar arrays rapidamente, podemos utilizar a função range;
     * Ex: range(1, 10);
     * Um array de 1 a 10 será criado sem a necessidade de um loop;
     * Podemos atribuir esse valor a uma variável;
    */

    $arr = range(1, 10);

    print_r($arr);

    echo '<br>';

    $arrDois = range(2, 20, 2);

    print_r($arrDois);