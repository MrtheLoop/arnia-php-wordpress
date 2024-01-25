<?php

# Faça um programa que receba do usuário 20 números e imprima a média aritmética desses números
# - Receber números do usuário ok
# - calcular média ok
# - imprimir média
#

$contador = 1;
$soma = 0;

while ($contador <= 20){
    $numero = readline("Digite o número " . $contador . "º:");
    $soma += $numero;
    $contador++;
}

$media = $soma / 20;

echo "A média atitimética dos números digitados é: " . $media;


?>