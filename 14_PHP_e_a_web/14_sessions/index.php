<?php

    /**Com session podemos criar uma variável que persiste em diferentes páginas e também
     * perduta por várias visitas ao mesmo site;
     * A session utiliza recursos de cookies para o seu funcionament, e se o recurso estiver
     * desabilidato, propaga a sessão via URL;
     * Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa
     * persistir de página em página;
     * Acaba sendo o recurso mais utilizado comparado com o cookie;
     * 
     * 
     * As sessions são salvas em arquivos no computador que estamos ou no servidor do app;
     * O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;
     * As sessions podem ser salvas em dois formatos: o próprio PHP e também o Web Distributed Data
     * eXchange (WDDX);
    */

    session_start();

    // print_r($_SESSION);

    $_SESSION['nome'] = "Nicolas";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
</body>
</html>