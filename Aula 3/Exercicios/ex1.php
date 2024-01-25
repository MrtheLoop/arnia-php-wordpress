<?php

$contador = 0;
$quantidade = readline("Escreva quantas vezes você quer que seja ecrita a frase: ");
$frase = readline("Digite a frase que deseja: ");

while ($contador < $quantidade){
    echo $frase . "\n";
    $contador++;
}

?>