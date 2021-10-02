<?php

    /**As classes abstratas não podem ser instanciadas/;
     * Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente
     * se uma classe herdar a abstrata;
     * A plavra reservada tanto para classes quanto para métodos é abstract;
     * 
     * Ex:
     *      abstract class ClasseAbstrata{}
    */

    abstract class Teste{

        public static function test(){
            echo "Método de classe abstrata <br>";
        }

    }

    // $a = new Teste; 
    //Erro: impossível instanciar a classe abstrata

    Teste::test();

