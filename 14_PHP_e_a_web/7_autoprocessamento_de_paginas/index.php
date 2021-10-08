<?php

    /**Podemos cria uma página que faz o processamento dos dados e também
     * exibe o input de informações;
     * Para isso devemos crair um if que checa se o método de requisição
     * ($_SERVER['REQUEST_METHOD']) é GET ou POST;
     * Depois criar as duas variações, para cada uma das possibilidades;
     * Ou checar se algum parâmetro veio pela requisição e então criar as variações;
    */

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){
        $nome       = $_POST['nome'];
    }

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
        <?php
            if ($method == "GET") :
        ?>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
        <?php else: ?>

            <h1>O seu nome é <?= $nome ?></h1>

        <?php endif; ?>
    </body>
    </html>

    <!-- Perceba que há o processamento da requisição tudo na mesma página. -->