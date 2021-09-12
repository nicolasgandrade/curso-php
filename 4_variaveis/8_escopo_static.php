<?php

    function func(){
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    func();
    func();
    func();

    echo "A resposta ficou 1,1,1 porque o valor não fica na memória <br>";

    function funcStatic(){
        
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    funcStatic();
    funcStatic();
    funcStatic();

    echo "Agora a resposta foi somando (1,2,3) pois ficou na memória";