<?php

    /**Crie uma classe Cachorro;
     * Crie os métodos latir e andar;
     * Execute o método em novas instâncias da classe;
    */

    class Cachorro{

        function latir(){
            echo "au au <br>";
        }

        function andar(){
            echo "andando <br>";
        }

    }

    $shake = new Cachorro;

    $shake->latir();
    $shake->andar();

    $bituca = new Cachorro;
    
    $bituca->latir();