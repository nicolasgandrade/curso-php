<?php

    /**As classes anônimas são criadas em uma variável e não possuem nome.
     * Elas funcionam como qualquer outra classe;
     * Precisamos fechá-las com ";";
     * 
     * Ex:
     *      $anonima = new class(){};
    */

    $pessoa = new class(){
        
        public $nome = "Nicolas";

        public function falarNome(){
            echo "Meu nome é $this->nome";
        }
    };

    echo $pessoa->nome;

    $pessoa->falarNome();
