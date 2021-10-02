<?php

    /**As traits permitem o reuso de código sem hierarquia de classes, ou seja, 
     * sem herança;
     * Podemos assim utilizar os métodos da classe que foi deita a trait;
     * Utilizamos a plavra reservada use;
     * 
     * Ex:
     *      class Teste{
     *              use ClasseTrait}
    */

    trait Objeto{

        public function teste(){
            echo "testando trait";
        }

    }

    class Central{

        use Objeto;

    }

    $a = new Central;
    $a->teste();