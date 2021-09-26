<?php

    /**Com a função parse_url podemos decompor uma URL;
     * Vamos receber um array com todas as partes da URL;
     * Alguns elementos que podem ser retornados são: protocolo,
     * host, parâmetros;
    */

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);

    echo '<br>';

    echo $arrayUrl["host"];