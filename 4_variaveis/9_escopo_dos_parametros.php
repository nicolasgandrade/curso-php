<?php

    /**Os parâmetros de função também são considerados tipos de variáveis;
     * Esse recurso nos ajuda a criar funções com valores dinâmicos;
     * Podemos alterá-los a cada invocação;
     * Podemos passar mais de um parâmetro para uma função;
     */

     function soma($a, $b){ //recebe os parâmetros a e b (como variáveis), ou seja, escopo de parâmetro

        echo $a + $b;
        echo "<br>";

        /*Funciona como se as variáveis tivessem sido declaradas
        dentro da própria função, porém vem como parâmetros */
        
     }

     soma(2, 4);
     soma(3, 9);
     soma(98, 5);