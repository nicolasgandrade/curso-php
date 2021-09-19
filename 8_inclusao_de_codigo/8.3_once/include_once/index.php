<?php

    //Arquivos q não existem
    include_once "teste.php"; // Só se inclui aqui, uma única vez
    include_once "teste.php";
    require_once "teste.php";
    require_once "teste.php";

    //O arquivo só pode ser incluido 1 vez