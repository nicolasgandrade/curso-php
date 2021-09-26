<?php

    /**Podemos remover os espaços em branco de uma string com funções do PHP;
     * 
     * trim: limpa os espaços antes e depois da string;
     * ltrim: limpa os espaços da parte inicial da string;
     * rtrim: limpa os espaços da parte final da string;
     * 
     * Assim podemos remover espaços desnecessários enviados pelo user;
    */

    $str1 = "       Nicolas        ";
    echo "Esta é a str1 sem tratamento: $str1.";

    echo '<br>';

    $strLimpa = trim($str1);

    echo "Esta é a str1 limpa: $strLimpa.";