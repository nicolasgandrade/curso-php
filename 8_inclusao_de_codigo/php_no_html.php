<?php

    $nome = "Nicolas";
    $produtos = ["Maçã", "Uva", "Laranja"];

?>

<h1>Teste de inclusão em arquivo phtml</h1>
<p>Nome: <?= $nome ?></p>

<h2>Produtos:</h2>

<ul>

    <?php foreach($produtos as $produto): ?>
        <li><?= $produto ?></li>
    <?php endforeach; ?>

</ul>