<?php

    /* O $this refere-se à instância atual do objeto;
     * Podendo assim alterar um valor de uma propriedade do objeto com:
     * $this->propriedade = x;
     * 
     * Podemos invocar um método do objeto com $this também;
    */

    class Animal{

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome; //O this está referindo-se ao objeto que utliza essa classe;
        }
    }    

    $bituca = new Animal;

    $bituca->escolherNome("Bituca");

    echo $bituca->nome; //Mostou "Bituca";