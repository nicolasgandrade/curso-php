<?php

    /**Para checar a ancestralidade de uma classe utilizamos o operador instanceof;
     * Podemos inserir essa operação em um if, pois vai retornar um booleano;
     * Exemplo:
     *      $objeto instanceof Humano;
    */

    class Humano {

    }

    $nicolas = new Humano;

    if($nicolas instanceof Humano){
        echo "Nicolas é Humano";
    }

    if($nicolas instanceof Animal){
        echo "Nicolas é um animal";
    }