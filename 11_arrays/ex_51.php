<?php

    /**Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
     * Ordene os dados do maior para o menor;
     * Exiba uma lista, simulando um ranking em HTML;
    */

    $classificacao = ['Nicolas' => 0, 'João' => 5, 'Victor' => 2, 'Julia' => 10, 'Leo' => 6];

    asort($classificacao);

?>

<table border = "1">
    <tr>
        <th>Nome</th>
        <th>Pontuação/10</th>
    </tr>

    <?php foreach($classificacao as $nome => $pontos): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $pontos; ?></td>
        </tr>
    <?php endforeach; ?>
</table>