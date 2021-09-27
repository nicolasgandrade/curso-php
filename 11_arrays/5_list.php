<?php

    /**A função list deixa o código mais curto sem precisar de um loop para criar as variáveis;
     * 
    */
    
    $arr = ["Nicolas", 17, "brasileiro", "Piedade"];

    list($nome, $idade, $nacionalidade, $cidade) = $arr ;
    //Acabei de transformar cada valor dentro do array em uma virável;

    echo "Meu nome é $nome, tenho $idade anos, sou $nacionalidade e moro em $cidade.";