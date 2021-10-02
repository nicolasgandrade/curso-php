<?php

    /**Existem 3 tipos de visibilidade: public, protected e private;
     * public: Pode ser acessado de qualquer forma;
     * proteceted: Pode ser acessado apenas pela classe de origem ou pelas que
     * receberam a mesma herança;
     * private: Pode ser acessado apenas pela classe que foi criada;
    */

    class Car{

        public $rodas = 4;
        private $pelicula = "Sem película";
        protected $retrovisor = 2;

        public function mudarPelicula($vidro){
            $this->pelicula = $vidro;
        }

        public function getVidro(){
            return $this->pelicula;
        }

    }

    class Mecanico{
        
        public function alterarRodas($obj){
            $obj->rodas = 6;
        }

        public function alterarPelicula($obj){
            $obj->pelicula = "Com pelicula";
        }

    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $nicolas = new Mecanico;
    $nicolas->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    /**Preceba que foi possível alterar as informações de um objeto através de outro; 
     * 
     * Veja que agora, caso eu tente alterar a película, aconteceria um fatal error e 
     * a aplicação seria desligada:
    */

    // $nicolas->alterarPelicula($carro);
    // echo $carro->pelicula;

    // ERRO




    /**Ainda que eu use a função da classe de origem é impossível alterar e dará erro: */

    // $carro->mudarPelicula("Com película");
    // echo $carro->pelicula;

    // ERRO


    /**A única coisa que dá para fazer com private, é mostrar a propriedade desde que
     * a ordem seja dada por um método da classe de origem:
    */

    echo $carro->getVidro() . "<br>";



    /**Com o protected é quase a mesma coisa, é impossível mostrar a não ser que seja
     * pela própria classe, mas diferente do private, é possível acessar por meio da herança;
     * 
     * Veremos no próximo arquivo...
    */