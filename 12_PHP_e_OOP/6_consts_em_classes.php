<?php

    /**As constantes são parecidas com variáveis, salvam valores em memória;
     * Porém o seu valor não pode ser alterado;
     * ex:
     *      public const CHAVE_API = "ASJB7378jshs87";
     * 
     * A sintaxe na hora de apresentar também muda, em vez da flecha -> usa-se :: ;
    */

    class Humano{

        public const OLHOS = 2;
        public const BRACOS = 2;

    }

    $nicolas =  new Humano;

    echo $nicolas::OLHOS;