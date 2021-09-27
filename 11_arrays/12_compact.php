<?php

    /**Com a função compact podemos criar um array a partir de variáveis;
     * Passamos para uma função o nome das variáveis em string;
     * E então um novo array é criado, podemos atribuir a uma variável;
    */

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "tetoSolar", "portas");

    print_r($carro);