<?php

    /**Podemos criar condicionais que fazem as verificações;
     * Caso alguma não atenda, retornamos uma mensagem ao usuário;
     */
    
    $validations = [];

    if (count($_POST) > 0){    

        if(!$_POST['name'] || !$_POST['idade']){
            $validations[] = "Preencha corretamente todos os campos.";
        }

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
    <?php if(count($validations) != 0): ?>
        <ul>
            <?php foreach($validations as $validation): ?>
                <li><?= $validation ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="name" placeholder="Nome">
        </div>
        <div>
            <input type="number" name="idade" placeholder="idade">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>