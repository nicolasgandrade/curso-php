<?php

    /**Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, automático;
     * Chame este array de carro;
     * Cre variáveis com base nesse array;
    */

    $carro = ["Jaguar", "3.0", "azul", 18, "teto solar", "automático"];

    list($marca, $motor, $cor, $aro, $teto, $manualOuAuto) = $carro;

    echo "Carro: $marca; motor $motor; cor $cor; aro $aro; com $teto; $manualOuAuto.";