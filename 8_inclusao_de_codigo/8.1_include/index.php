<?php

    // O include não gera erros fatais, apenas dá um warning

    include "teste.php"; //Interessante para quando o arquivo não é tão necessátio assim;

?>

<p>Arquivo index.</p>

<p>Perceba que posso mostrar a variável que está dentro do arquivo que 
    está sendo incluído: <?php echo $a; ?>
</p>