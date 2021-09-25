<?php

    /**Uma função pode retornar diversos valores;
     * Os valores retornam em forma de array;
     * É possível acessar os índices de forma isolada;
     * 
     * function func(){
     *      return ["a", 10, true];
     * }
    */

    function func($nome, $idade){
        $nome = "Sr. $nome, ";
        $idade = "$idade anos.";

        return [$nome, $idade];
    }

    $dados = func("Nicolas", 17);

    echo "Olá, $dados[0] você tem $dados[1]";