<?php

    //Serve para checar se algo tem ou não valor

    echo NULL;

    $nome = NULL; //Estou dizendo que vou usá-la no futuro, mas por enquanto, ela não tem valor

    if(is_null($nome)){
        echo "O nome ainda está vazio";
    } else{
        echo "O nome é $nome";
    }