<?php

    /**Com a função shuffle podemos reorganizar os itens em ordem aleatória;
     * Passamos apenas o array como parâmetro;
     * Temos um array retornando em ordem aleatória;
    */

    $arr = [1,2,3,4,5,6,7,8,9];

    shuffle($arr);

    print_r($arr);