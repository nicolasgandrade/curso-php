<?php

    /**As interfaces criam um modelo de definição de uma classe;
     * Então toda classe que implementar uma interface, deverá implementar também as suas
     * propriedade e métodos, obrigatoriamente;
     * A palavra reservada é implements;
     * Exemplo:
     *      class Humano implements Caracteristicas;
    */

    interface Caracteristicas{

        public function falar();

        public const NOME = "Nicolas";

    }

    class Humano implements Caracteristicas{

        public $idade = 29;

        public function falar(){
            echo "Olá, mundo <br>";
        }

        public function falarNome(){
            echo "Meu nome é " . self::NOME . "<br>";
        }

    }

    $nicolas = new Humano;

    $nicolas->falar();
    $nicolas->falarNome();