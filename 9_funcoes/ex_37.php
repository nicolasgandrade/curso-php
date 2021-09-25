<?php

    /**Crie uma função chamada defineCorCarro;
     * Onde há um parâmetro chamado cor, com valor defalult de cor branca;
     * Retorne a cor do carro;
     * Imprima o retorno tanto com parâmtro default como também definindo a cor;
    */

    function defineCorCarro($cor = 'Branco'){
        return $cor.'<br>';
    }

    $b = defineCorCarro();
    $v = defineCorCarro('Vermelho');

    echo $b;
    echo $v;