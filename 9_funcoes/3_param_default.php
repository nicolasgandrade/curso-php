<?php

    //A função executa normalmente se não receber parâmetros;

    function func($a = "default"){
        echo $a.'<br>';
    }

    func();
    func('change default');