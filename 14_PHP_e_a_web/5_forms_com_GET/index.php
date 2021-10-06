<?php

    /**Vamos precisar criar um formulário e definir o método como GET;
     * No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados;
     * Faremos o processo e retornaremos algo para o usuário;
    */

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
    <form action="processamento.php" method="GET">
        <div>
            <input type="text" name="nome" placeholder="Nome...">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>