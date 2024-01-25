<?php

$contador = 1;
$soma = 0;

while($contador <= 5){
    $numero = readline("Digite um número: ");
    $soma += $numero;
    $contador++;
}

$media = $soma / 5;
echo "A soma é: " . $soma . "\n";
echo "A média é: " . $media . "\n";
?>