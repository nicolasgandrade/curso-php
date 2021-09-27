<?php

    /**Com a função array_keys_exists podemos verificar se há um valor em uma
     * respectiva key de um array;
     * Podemos fazer essa checagem em um if;
     * Ex:
     *      array_key_exists("nome", "$arr");
     * Outra função que podemos utilizar para esse fim é a isset;
    */

    $arr = ["Nome" => "Nicolas", "Idade" => 17, "Amigos" => 0];

    if(array_key_exists("Nome", $arr)){
        echo "A chave existe";
    }else{
        echo "A chave não existe";
    }