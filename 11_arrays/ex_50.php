<?php

    /**Crie um array associativo com nomes e idades;
     * Imprima estes dados em uma tabela de HTML;
     * Dica: utilize as tags do elemento table;
    */

    $pessoas = ["Nicolas" => 17, "Demetrius" => 44, "Gisela" => 43, "Acucena" => 13];

?>

<table border = "1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $pessoa => $idade): ?>
        <tr>
            <td><?= $pessoa; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>