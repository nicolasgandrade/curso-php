<?php

    /**Crie uma classe Carro;
     * Crie algumas propriedades e também a propriedade velocidadeMaxima;
     * Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima;
     * E também o getVelocidadeMaxima, onde é possível imprimir a velociade maxima do carro.
    */

    class Carro{

        public $portas = 4;
        public $rodas = 4;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($velocidadeMaxima){
            $this->velocidadeMaxima = $velocidadeMaxima;
        }

        function getVelocidadeMaxima(){
            echo $this->velocidadeMaxima;
        }

    }

    $uno = new Carro;

    $uno->setVelocidadeMaxima(160);
    $uno->getVelocidadeMaxima();