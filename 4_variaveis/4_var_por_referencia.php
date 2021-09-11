<?php

    /** Uma variável se referencia a outra por meio do símbolo: =&;
     * Se mudarmos a variável de referência, a refenciada também muda o valor e vice-versa.
     * As duas variáveis estão ligadas.
    */

    $x = 30;

    $y =& $x;

    echo "$x <br>";
    echo "$y <br>";

    echo "Mudança da referencia:<br>";

    $y = 15;

    echo "$x <br>";
    echo "$y <br>";

    echo "Mudança da referenciada<br>";

    $x = 10;

    echo "$x <br>";
    echo "$y <br>";