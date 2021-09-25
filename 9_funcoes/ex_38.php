<?php

    /**Crie uma função que recebe um array de itens de supermercado
     * Retorne este array em forma de string, separando em vírgulas;
    */

    $arr = ['Arroz', 'Macarrão', 'Pasta de dente'];

    function spm($arr){
        $str = "Você escolheu os seguintes itens: ";

        for($i = 0; $i < count($arr); $i++){

            
            if($i + 1 == count($arr)){
                $str .= "$arr[$i].";
            } else{
                
                $str .= "$arr[$i], ";
            }
        }

        return $str;
    }

    echo spm($arr);