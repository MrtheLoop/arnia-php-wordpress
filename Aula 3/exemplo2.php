<?php
# Escreve o que quero 100x

$contador = 0;
$nome = readline("Digite o nome que será impresso: ");

while ($contador < 100) {
    echo "$nome\n";
    $contador++;
}


?>