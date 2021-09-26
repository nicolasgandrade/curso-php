<?php

    /**Crie uma função que recebe características de algum objeto como argumento
     * (carro, sofá, cafeteira...), em array associativo;
     * O array deve conter nome => preco;
     * Retorne apenas os itens que custam mais de $10;
     * Imprima o retorno;
    */

    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
    ];

    function func($arr){

        $maiorDez = [];

        foreach($arr as $item => $preco){
            if($preco > 10){
                array_push($maiorDez, $item);
            }
        }

        return $maiorDez;
    }

    $novoArr = func($arr);

    print_r($novoArr);

    