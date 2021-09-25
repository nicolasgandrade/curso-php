<?php

    /* Utilizamos duas funções para verificar dados formatados:
        print_r e var_dump;
        As duas apresentam os dados de forma semelhante;
        Porém var_dump exibe de uma forma "human readble".
    */

    $arr = [ "teste", 10, true];

    print_r($arr);

    echo "<br>";

    var_dump($arr);