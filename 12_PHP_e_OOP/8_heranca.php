<?php

    /**A herança é p recurso da OOP que dá a possibilidade de uma classe herdar métodos e 
     * propriedades de outra;
     * 
     * A palavra reservada é extends;
     * 
     * Ex:
     *      class Programmer extends Pessoa {
     * }
    */

    class Pessoa{
        
        public $idade = 17;

        public function falar(){
            echo "Olá mundo <br>";
        }

        protected function gritar(){
            echo "PHP É MUITO FÁCIL <br>";
        }

    }

    class Programador extends Pessoa {

        public function acesso(){
            echo $this->gritar();
        }

    }

    $joao = new Pessoa;
    $joao->falar();

    $nicolas = new Programador;
    $nicolas->falar();
    $nicolas->acesso(); //Perceba que aqui eu acessei uma função protected através de outra (herança);

    