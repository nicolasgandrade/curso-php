<?php

    /**Utiliza-se a sintaze function, porém dentro de uma class; */

    class Pessoa{

        function ouvir($ouvindo){
            echo $ouvindo;
        }

    }

    $nicolas = new Pessoa;

    $nicolas->ouvir("Estou ouvindo");