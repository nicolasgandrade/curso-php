<?php

    /**Crie variáveis com características de algum objeto ou animal;
     * Depois crie um array com compact com estas mesmas variáveis;
     * Faça um loop no array e imprima os valores;
    */

    $nome = "Bituca";
    $patas = 4;
    $cor = "Desconhecida";
    $rabo = true;

    $bituca = compact("nome", "patas", "cor", "rabo");

    foreach($bituca as $caracteristicas => $valor){
        echo "$caracteristicas: $valor" . '<br>';
    }