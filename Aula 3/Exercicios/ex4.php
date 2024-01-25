<?php

#Faça um programa para imprimir os múltiplos de 5 menores ou igual a n, sendo n fornecido pelos usuários. Não use comando de decisão.

# - Receber N do usuário
# - Calcular múltiplo de 5
# - Imprimir os múltiplos
#
#


$n = readline("Digite um número inteiro: ");

$numero = 5;

while ($numero <= $n) {
    echo $numero . "\n";
    $numero += 5;
}
?>
