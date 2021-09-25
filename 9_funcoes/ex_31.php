<?php

    /**Crie um array com strings;
     * Utilize a função implode no array;
     * Primeiro argumento : ",";
     * Segundo argumento: o seu array;
     * Atribua a invocação da função numa variável;
     * Exiba o resultado;
     * 
     * Implode: Junta os dados da string em uma array e coloca entre os 
     * valores um separador identificado no primeiro argumento da função;
     */

    $arr = ['Nicolas', 'Açucena', 'Gisela', 'Demetrius', 'Maitê'];

    $imp = implode(", ", $arr);

    echo $imp;