<?php

    /**Podemos preencher o formulário com dados que vieram da requisição;
     * Isso acontece bastante em resultados de busca ou edições de registro;
     * Podemos fazer uma checagem de se o dado foi enviado e recebido para a página,
     * e utilizar o acho para exibir o atributo value do input;
     * 
     * Ex:
     *      <input type="text" value"<?= $nome; ?>">
    */
    
    $usuario = [
        'nome' => 'Nicolas',
        'idade' => 17
    ];

    if ($usuario) {
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
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
    <form action="">
        <div>
            <!-- O campo já fica preenchido com o valor do banco de dados: -->
            <input type="text" nome="nome" placeholder="Nome" value="<?= $nome ?>">
        </div>
    </form>
</body>
</html>