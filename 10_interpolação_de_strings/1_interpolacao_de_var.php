<?php

    /**Podemos interpolar variáveis em strings de duas formas;
     * Utilizando aspas duplas e colocando a variável;
     * Ou com chaves e o nome da variável;
     * Não há diferença entre as formas;
     * "Interpolando a variável $teste";
     * "Interpolando a variável {$teste}";
    */

    $a = "variável a";

    echo "Interpolando a variável com aspas duplas: $a<br>";

    echo "Interpolando com chaves {$a}";