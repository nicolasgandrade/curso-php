<?php

    class Pessoa{

        function falar(){
            echo 'Olá, mundo';
        }

    }

    $nicolas = new Pessoa();

    // Importante sempre usar as setas quando se refere a um objeto

    $nicolas->nome = "Nicolas";

    echo $nicolas->nome;

    echo '<br>';

    // Chamando o método falar, que está dentro de Nicolas, já que este é uma Pessoa (classe);
    $nicolas->falar();