<?php

    //Só é disponível dentro da função e seu valor é resetado ao fim da função.

    $x = 10;

    function func(){
        $x = 5;
        echo "local-> x = $x <br>";
    }

    func();

    echo "global-> x = $x";