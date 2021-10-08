<?php

    /**Os inputs de checkbox podem conter mais de um valor;
     * Para receber todos eles no backend precisamos adicionar uma sintaxe de array no name;
     * Assim receberemos todos os inpúts marcados;
     * 
     * Ex:
     *      name="caracteristicas[]"
    */

    if (isset($_POST['ingredientes'])) {

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }else{
        echo 'caguei';
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
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate">Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="abobora">Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="feijao">Feijão
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>