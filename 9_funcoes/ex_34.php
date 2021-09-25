<?php

    /**Verificar se um número é par ou ímpar.
     * Crie um função que o faça;
     * Se for par imprima uma mensagem;
     * Se for ímpar, imprima outra mensagem;
     */

    function parImpar($value){
        $calc = $value % 2;

        if($calc === 0){
            echo "O número é par<br>";
        } else {
            echo "O número é ímpar<br>";
        }
    }

    parImpar(3);
    parImpar(2);