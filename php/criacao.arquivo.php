<?php
    $arquivo = fopen("notas.txt", "a");
    fwrite($arquivo, "primeira linha de texto\n");
    fclose($arquivo);
    echo "arquivo criado com sucesso!";
?> 

