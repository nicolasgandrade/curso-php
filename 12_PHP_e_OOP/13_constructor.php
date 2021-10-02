<?php

    /**Pelos construtores podemos inicializar objetos com valores de propriedades
     * únicos para cada objeto;
     * Passamos como argumentos os valores das propriedades;
     * 
     * Ex:
     *      function __construct($portas, $motor, $rodas){}
    */

    class Car{

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }
    }

    $ferrari = new Car(4, "vermelha", "Ferrari");

    echo "O carro selecionado é da marca $ferrari->marca, possui $ferrari->portas e é
    da cor $ferrari->cor";
