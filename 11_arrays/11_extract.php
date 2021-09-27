<?php

    /**Coma funçãio extract podemos criar variáveis rapidamente de arrays associativos;
     * O nome da chave será o nome da variável;
     * Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita;
    */

    $arr = ['nome' => 'Nicolas', 'idade' => 17, 'amigos' => 0];

    extract($arr);

    echo "$nome <br> $idade <br> $amigos";