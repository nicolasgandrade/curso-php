<?php

    /**func_get_arg = retorna uma lista com os argumentos de uma função;
     * func_num_args = retorna o número de argumentos de uma função;
    */

    function func($a, $b){
        print_r(func_get_args());
        echo '<br>';
        echo func_num_args();

        return $a + $b;
    }

    func(2,3);