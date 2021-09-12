<?php

    // Inacessível dentro de funções caso não seja usada a palavra "global"

    $a = 'variável global';

    echo "Essa é a minha variável antes de entrar no if: $a <br>";

    if(true){
        $a = 'variável global alterada';

        echo "Essa é a variável dentro do if: $a <br>";
    }

    echo "Essa é ela após o if: $a <br>";

    function func(){

        global $a;
        $a = "entrou na função";

        echo "Aqui estou dentro de uma função, e chamei a variável GLOBAL, porém alterei ela: $a <br>";
    }

    func();

    echo "Agora, essa é a variável após passar pela função: $a <br>";