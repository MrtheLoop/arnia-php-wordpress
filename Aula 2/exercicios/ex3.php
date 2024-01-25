<?php

# Faça um script php que receba três números inteiros, em seguida mostre o maior e o menor deles.

$n1 = readline("Digite o primeiro número: ");
$n2 = readline("Digite o segundo número: ");
$n3 = readline("Digite o terceiro número: ");


if($n1 < $n2 && $n2 > $n3 ) {
    $maior = $n2;
    echo "O maior número é segundo, $maior\n";
}  
elseif ($maior < $n2 && $n2 < $n3 ) {
    $maior = $n3;
    echo "O maior número é terceiro, $maior \n";
} else {
    echo "O maior é o primeiro número $n1 \n";
}






?>