<?php

    /* 
        Aspas simples ou duplas
        Aspas duplas interpretam variáveis
    */

    echo 'Texto em aspas simples <br>';
    echo 'Texto em aspas duplas <br>';
    echo 'Posso inserir aspas: "" diferentes <br>';

    // Com aspas duplas, posso inserir variáveis:
    $a = 'Isso é uma variável';

    echo "Quando uso aspas duplas, posso inserir a variável a: $a <br>";
    echo 'Se uso aspas simples, ele não reconhece a variável: $a';
