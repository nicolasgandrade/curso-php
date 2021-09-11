<?php

    //Um array associativo é constituído de uma chave e um valor
    //A chave deve vir entre chaves e o valor deve ser precedido de uma seta

    $arr = ['nome' => 'Nicolas', 'idade' => 17, 'cabelo' => 'castanho', 'bonito' => false];

    echo "Meu nome é ".$arr['nome'].", e tenho ".$arr['idade']."anos.";

    echo '<br>';
    
    print_r($arr);

    echo '<br>';

    if($arr['bonito'] === true){
        echo 'É bonito.';
    } else{
        echo 'Não é bonito.';
    }