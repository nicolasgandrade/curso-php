<?php

    /* O foreach é orientado a arrays:
        
        foreach($array as $item){ //$item é cada um dos elementos do array
            código...
        }
    */

    $nomes = ["Nicolas", "João", "Paulo", "Pedro"];

    foreach($nomes as $nome){
        echo "O nome do índice atual é $nome <br>";
    }