<?php

    /**Crie uma classe Pessoa;
     * Crie a propriedade nome e idade;
     * E também um método andar;
    */

    class Pessoa{

        public $nome;
        public $idade;

        function andar($metros){
            echo "A pessoa andou $metros metros";
        }

    }

    $nicolas = new Pessoa;

    $nicolas->nome = "Nicolas";
    $nicolas->idade = 17;

    $nicolas->andar(50);