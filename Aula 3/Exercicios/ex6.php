<?php

# Desenvolva um gerador de tabuada, capaz de gerar a tabuada de qualquer número inteiro entre 1 a 10. O usuário deve informar de qual número ele deseja ver a tabuada.
# - Recebe número do usuário ok
# - fazer a tabuada 
# - imprimir tabuada
#

$valorMultiplicado = readline("Digite o valor que deseja multiplicar: ");
$contador = 0;

while ($contador <= 10) {
    $multiplicacao = $valorMultiplicado * $contador;
    echo $valorMultiplicado . " x " . $contador . " é: " . $multiplicacao ."\n";
    $contador++;
}


?>