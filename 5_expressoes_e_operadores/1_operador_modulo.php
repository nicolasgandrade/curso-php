<?php

    /**Serve para mostrar o resto de uma divisão. Pode ser útil para definir
     * se o dividendo é par ou impar caso utilizado com o número 2, visto que
     * números pares quando divididos por 2 resultam em 0, e ímpares resultam em 1.
     */

    $op1 = 12 % 2;
    $op2 = 13 % 2;

    echo $op1 . "<br>";
    echo $op2 . "<br>";

    echo "<br>";

    if ($op1 == 0) {
        echo "O dividendo da op1 é par";
    } else {
        echo "O dividendo da op1 é ímpar";
    }

    echo "<br><br>";

    if ($op2 == 0) {
        echo "O dividendo da op2 é par";
    } else {
        echo "O dividendo da op2 é ímpar";
    }