<?php

    /**Crie uma classe Cachorro com propriedades;
     * Inicie as propriedades via contructor;
     * Crie um método para exibir cada uma das propriedades que você criou;
    */

    class Cachorro{

        public $cor;
        public $raca;
        public $porte;

        function __construct($cor, $raca, $porte){

            $this->cor = $cor;
            $this->raca = $raca;
            $this->porte = $porte;

        }

        public function caracteristicas(){
            echo "O cachorro é da cor $this->cor, da raça $this->raca e é de porte $this->porte";
        }

    }

    $ludovico = new Cachorro("Amarela", "Golden Retriever", "Grande");

    $ludovico->caracteristicas();