<?php

    /**Para declarar propriedades vamos basicmanet criar uma variável dentro de uma class;
     * Porém precisamos definir a sua provacidade, ex: public;
     * Uma propriedade pública pode ser acessada fora do escopo do objeto;
     * Ex:
     *      public $idade = 21;
    */

    class Car{

        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelho";

    }

    $ferrari = new Car;

    echo $ferrari->aro . '<br>';

    $ferrari->cor = "azul";

    echo $ferrari->cor;